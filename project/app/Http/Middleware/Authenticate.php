<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\App;



class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
     
    }

    // public function handle($request, Closure $next)
    // {
    //     if($request->input('email') && $request->input('password')){
    //         return $next($request);
    //     }
    //     return response()->json('error');
    // }
}
