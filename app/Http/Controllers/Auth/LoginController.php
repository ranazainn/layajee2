<?php

namespace App\Http\Controllers\Auth;

Use App\Models\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect('/login');
        }
        $authUser = $this->checkUser($user, $provider);
        \Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }
    
        public function logout(Request $request){
    
        $role= \Auth::user()->role;
        
        auth()->logout();
        if($role==8)
        {
            return redirect('/login');
        }
        else
       {
        return redirect('/');
       }
    
    }
    public function checkUser($providerUser, $provider)
    {
      $account = User::where('provider_name', $provider)
                ->where('provider_id', $providerUser->getId())
                ->first();
      if ($account) {
          return $account->user;
      } else {
           $user = User::where('email', $providerUser->getEmail())
          ->first();
          if (! $user) {
              $user = User::create([
                'email' => $providerUser->getEmail(),
                'name'  => $providerUser->getName(),
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
              ]);
          }
          return $user;
      }
    }
}