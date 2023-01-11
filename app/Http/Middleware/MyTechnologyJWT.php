<?php

namespace App\Http\Middleware;

use App\Http\Libraries\ResponseBuilder;
use Auth;
use Closure;
//use JWTAuth;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class MyTechnologyJWT extends BaseMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $routName = '';
        if($request->route()->uri !== 'en/broadcasting/auth'){
            $routName = $request->route()->action['as'];
        }

        $notAuthorizedRoutes =[
          'api.store.details',
            'api.products.list.store'
        ];
        if (!$token = $this->auth->setRequest($request)->getToken() ) {
            if(!in_array($routName,$notAuthorizedRoutes)){
                return (new ResponseBuilder(401, __('Token not provided')))->build();
            }else{
                return $next($request);
            }

        }

        try {
            $user = JWTAuth::parseToken()->authenticate();

        }

        catch (Exception $e) {

            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['status' => 'Token is Invalid']);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['status' => 'Token is Expired']);
            }else{
                return response()->json(['status' => 'Authorization Token not found']);
            }
        }

//        return $next($request);
//        try {
//            $user = $this->auth->authenticate($token);
//        } catch (TokenExpiredException $e) {
//            return (new ResponseBuilder(401, __('Token expired')))->build();
//        } catch (JWTException $e) {
//            return (new ResponseBuilder(401, __('Invalid token')))->build();
//        }
//        if (!$user) {
//            return (new ResponseBuilder(401, __('Could not find your account')))->build();
//        }


        $request->request->add(['jwt' => ['user' => $user, 'token' => $token]]);

//        $request->request->add(['user' => $user]);
//        $request->
//        Auth::setUser($user);
        return $next($request);
    }

}
