<?php

namespace App\Http\Controllers\userControllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Session;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository= new UserRepository();
        
    }

    //---------------user register start------------//

    public function registerIndex(){
    
        return view('UserPanel/indexRegister');
    }

    public function registerSave(Request $request){
      
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',     
            'email'=>'required|max:50',
            'phone'=>'required|min:11',
            'gender'=>'required'
        ]);
          
        $data['name'] =$validatedData['first_name'].' '. $validatedData['last_name'];
        $data['email']=$validatedData['email'];
        $data['gender']=$request->gender;
        $data['phone']=$request->phone;
  
                //    $this->userRepo->createData($data,0);      
                //    return redirect('/user/register');

       try {
        $user = $this->userRepository->getByEmail($data['email']);

        if ($user)
        {
            $credentials['email'] = $data['email'];
            $credentials['password'] = $user->plain_password;
        
           if(Auth::attempt($credentials)) {
                $this->userRepository->setLoginDetails($request);
                return redirect()->route('schoolchildinfo');       
            }
        }
        else{
            
            $user= $this->userRepository->create($data,0); 
            $token = JWTAuth::fromUser($user);
            $user['token'] = 'Bearer ' . $token;
           
            session()->put('USER_DATA',$user);
            session()->flash('status',__('Registration successful.'));
            $this->guard()->login($user);
            return $this->registered($request, $user) ?: redirect($this->redirectPath());       
        }
            }
            catch (\Exception $e){
            
                return response(['err'=>$e->getMessage()]);
            } 

    }
//---------------user register end------------//

    
//-----------------user login start----------------//

    public function loginIndex(){
    
        return view('UserPanel/userLogin');
    }

    public function getUser(Request $request){

        try {
            $user = $this->userRepository->getByEmail($request->email);
            if ($user)
            {
                $credentials['email'] = $request->email;
                $credentials['password'] = $user->plain_password;
            
               if(Auth::attempt($credentials)) {
                    $this->userRepository->setLoginDetails($request);
                    return redirect()->route('schoolchildinfo');       
                }
            }
            else{
                
                $user= $this->userRepository->create($request->toArray(),0); 
                $token = JWTAuth::fromUser($user);
                $user['token'] = 'Bearer ' . $token;           
                session()->put('USER_DATA',$user);
                session()->flash('status',__('Login successful.'));
                $this->guard()->login($user);
                return $this->registered($request, $user) ?: redirect($this->redirectPath());       
            }
        }
        catch (\Exception $e){
        
            return response(['err'=>$e->getMessage()]);
        }

    }

//-----------------user login end----------------//
   
    

}
