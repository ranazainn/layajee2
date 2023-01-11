<?php
namespace App\Repositories;
use App\Http\Repositories\BaseRepository\Repository;
use App\Traits\EMails;
use App\User;
use Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Session;
class UserRepository extends Repository{
    use EMails;
    protected $model;
    private $modelchildinfo;

    public function __construct()
    {   
        $this->model =new User();
    }
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }
    public function setLoginDetails($request, $fromWeb = false)
    {
        $user = auth()->user();
        $user['token'] = JWTAuth::fromUser($user);
        $user['token'] = 'Bearer ' . $user['token'];
        session()->put('USER_DATA',$user);
        session()->flash(__('status'), __('Login Successful'));
        return true;
    }
    public function getByEmail($email)
    {
       
        $user  = $this->model->where('email', '=', $email)->first();
        
        if ($user) 
        {
            return $user;
        }
        return false;
    }
   
    public function findOrfail($id)
    {
        return $this->model->findOrfail($id);
    }

    public function saveRegisterApi(array $request)
    {
        $userId = JWTAuth::user()->id;
        $data = $this->model->create($request)->where('id',$userId);
        return $data;
    }

    public function getAll()
    {
        return $this->model->all();
    }
     private function setWebData($userData, $token)
    {
        $userData->token = 'Bearer '.'' . $token;
      
        session()->forget('USER_DATA');
       //session()->put('USER_DATA', $userData);
        Session::put('USER_DATA', $userData);
        return $userData;
    }

    public function create($request, $id, $fromAdmin = false)
    {
              
        $data = $request;
        $data['verify_with'] = 'email';
        $data['verification_code'] = rand(1000, 9999);
        $data['password'] = generate_string();
        $data['plain_password'] =  $data['password'];
       if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        $user=$this->model->create($data);
         if (!$fromAdmin) {
            if ($data['verify_with'] == 'email') {
                $data['email_verified'] = 0;
                $data['receiver_email'] = $data['email'];
                $data['receiver_name'] =  $data['name'];
                $data['sender_name'] = 'Layajee';
                $data['sender_email'] = "layajee@gmail.com";
                $this->sendMail($data, 'emails.email_verification', 'Email verification code',   $data['receiver_email'], $data['sender_email']);
            } 
        }
        $user = $this->model->where(['id' => $user->id])->firstOrFail();
        $customClaims['user_id'] = $user->id;
        $token = JWTAuth::fromUser($user, $customClaims);
        return $this->userData($user, $token);
    }


    // public function createData($request, $id, $fromAdmin = false)
    // {
              
    //     $data = $request;
    //     $data['verify_with'] = 'email';
    //     $data['verification_code'] = rand(1000, 9999);
    //     $data['password'] = generate_string();
    //     $data['plain_password'] =  $data['password'];
    //    if (!empty($data['password'])) {
    //         $data['password'] = bcrypt($data['password']);
    //     }
    //     $user=$this->model->create($data);
    //      if (!$fromAdmin) {
    //         if ($data['verify_with'] == 'email') {
    //             $data['email_verified'] = 0;
    //             $data['receiver_email'] = $data['email'];
    //             $data['receiver_name'] =  $data['name'];
    //             $data['sender_name'] = 'Layajee';
    //             $data['sender_email'] = "layajee@gmail.com";
    //             $this->sendMail($data, 'emails.email_verification', 'Email verification code',   $data['receiver_email'], $data['sender_email']);
    //         } 
    //     }
    //     $user = $this->model->where(['id' => $user->id])->firstOrFail();
    //     $customClaims['user_id'] = $user->id;
    //     $token = JWTAuth::fromUser($user, $customClaims);
    //     return $this->userData($user, $token);
    // }
     private function userData($user, $token, $fromAdmin = false)
    {
        $userData = $user;
        if ($this->getFromWeb()) {
            if ($fromAdmin) {
                $userData->token = $token;
                return $userData;
            } else {
                return $this->setWebData($userData, $token);
            }
        }
        foreach ($userData as $key => $value) {
            if (is_null($value)) {
                if ((strpos($key, '_id') !== FALSE) && ($key != 'facebook_id' || $key != 'google_id')) {
                    $userData[$key] = '';
                } else {
                    $userData[$key] = '';
                }
            }
            if ($key == 'verification_code') {
                $userData[$key] = '';
            }
            if ($key == 'latitude' || $key == 'longitude') {
                $userData[$key] = round($userData[$key], 2);
            }
        }
        $userData['token'] = 'Bearer ' . $token;
        return $userData;
    }

    public function emailVerification($request, $fromWeb = false)
    {
        $user = $this->getUser();
    
        $token = $user->token?$user->token:JWTAuth::fromUser($user);
      
        if ($user->verification_code == $request->get('verification_code')) {
            $user->update(['verification_code' => '', 'is_verified' => 1]);
            $userData = $this->userData($user, $token);
            $data['verify_with'] = 'email';
            $data['verification_code'] = $userData['plain_password'];
            if ($data['verify_with'] == 'email') {
                $data['email_verified'] = 0;
                $data['receiver_email'] = $userData['email'];
                $data['receiver_name'] =  $userData['name'];
                $data['sender_name'] = 'Layajee';
                $data['sender_email'] = "layajee@gmail.com";
                $this->sendMail($data, 'emails.password_verification', 'Email verification code',   $data['receiver_email'], $data['sender_email']);
            } 
            return $userData;
        }
        $user->token = $token;
        return false;
    }
    public function createchilinfo(array $attributes)
    {
        return $this->modelchildinfo->fill($attributes)->save();
    }

    public function update($id, array $attributes)
    {

    }
    public function delete($id)
    {

    }
    public function edit($id)
    {

    }
    public function resendVerificationCodeTrait($fromWeb = false)
    {

        $user = $this->getUser();
        $token = $user->token?$user->token:JWTAuth::fromUser($user);
        
        if ($user->email_verified == 0) {
            if ($user->verify_with == 'phone') {
                // $this->sendVerificationCodeSMS($user);
            } else {

                $data['verification_code'] = rand(1000, 9999);
                $data['receiver_email'] = $user->email;
                $data['receiver_name'] =  $user->name;;
                $data['sender_name'] = 'Layajee';
                $data['sender_email'] = "layajee@gmail.com";
                $user->update(['verification_code' => $data['verification_code']]);
                $this->sendMail($data, 'emails.email_verification', 'Email verification code', $data['receiver_email'], $data['sender_email']);
            }
            $userData = $this->userData($user, $token);
            return $userData;
        }
        return false;
    }
    
  
}