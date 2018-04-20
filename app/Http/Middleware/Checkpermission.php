<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Checkpermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {

        if (Auth::guard($guard)->check() && auth()->user()->type === 'admin') {

        return $next($request);
        }

        return redirect('/auth/login')->with('error','عفوا انت لا تمتلك الصلاحية للدخول لهذا الرابط');   
    



    }

   

}


    

