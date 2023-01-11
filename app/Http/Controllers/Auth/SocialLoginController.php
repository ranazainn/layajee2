<?php

namespace App\Http\Controllers\Auth;

Use App\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Laravel\Socialite\Two\InvalidStateException;
class SocialLoginController extends Controller
{


    public function redirect($provider)
    {
        
        return Socialite::driver($provider)->redirect();
    }
    public function callback($service)
    {
        try {
            $user = Socialite::driver($service)->user();
        } catch (InvalidStateException $e) {
            $user = Socialite::driver($service)->stateless()->user();
        }
        $requestData = array();
        if ($service == "google") {
            $requestData["google_id"] = $user->id;
            $requestData["email"] = $user->email;
            $requestData["first_name"] = $user->user['given_name'];
            $requestData["last_name"] = '';
            $requestData["profile_pic"] = $user->getAvatar();
        } elseif ($service == "facebook") {
            $requestData["facebook_id"] = $user->id;
            $requestData["email"] = $user->email;
            $fullname = explode(' ', $user->name);
            $requestData["first_name"] = $fullname[0];
            $requestData["last_name"] = $fullname[1];
            $requestData["profile_pic"] = $user->getAvatar();
        }
        elseif ($service == 'instagram'){
            $requestData["instagram_id"] = $user->id;
            $requestData["email"] = $user->email;
            $fullname = explode(' ', $user->name);
            $requestData["first_name"] = $fullname[0];
            $requestData["last_name"] = '';
            if (count($fullname) > 1){
                $requestData["last_name"] = $fullname[1];

            }
            $requestData["profile_pic"] = $user->avatar;
        }

        $userdata = $this->userSocialLogin($requestData);


        if ($userdata) {
            \Auth::loginUsingId($userdata->id);
            $userdata = auth()->user();
            $userdata['token'] = JWTAuth::fromUser($userdata);
            session()->put('USER_DATA', $userdata);
            session()->flash('status','Login Successful');
            return redirect('/dashboard');
        }
        return redirect()->back();
    }
    public function userSocialLogin($requestData)
    {

        $socialLoginColumn = 'google_id';
        if (!empty($requestData['facebook_id'])) {
            $socialLoginColumn = 'facebook_id';
        }
        $userExists = User::where([$socialLoginColumn => $requestData[$socialLoginColumn]])->first();
        if ($userExists) {
            $user = $userExists;
        } else {
            $userExists = User::where(['email' => $requestData['email']])->first();
            if ($userExists) {
                $userExists->$socialLoginColumn = $requestData[$socialLoginColumn];
                $userExists->save();
                $userExists = $userExists;
            } else {
                return false;
            }
        }
        if ($userExists) {
            return $userExists;
        }
        return false;
    }
}