<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;



class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('home');
    //     }
     
    // }

    public function handle(Request $request, Closure $next, ...$guards)
    {
    if(Auth::check()){
        return redirect('home');
    }

        return $next($request);
    }

    
}
