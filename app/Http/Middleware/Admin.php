<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(!Auth::check()){
            return redirect(url('/'));
        }else{
            $user=Auth::user();
            if ($user->hasRole('Admin')){
                return $next($request);
            }else{
                return redirect(url('/'));
            }
        }
        return $next($request);
    }
}
