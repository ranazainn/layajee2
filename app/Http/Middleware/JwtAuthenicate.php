<?php

namespace App\Http\Middleware;

use Tymon\JWTAuth\Http\Middleware\Authenticate;

use JWTAuth;


use Closure;

class JwtAuthenicate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = JWTAuth::parseToken()->authenticate();
        return $next($request);
    }
}
