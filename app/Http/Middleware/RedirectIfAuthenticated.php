<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if(auth()->user()->type === 'admin') {
            return redirect('/admin');
        } else {
            if(auth()->user()->choix == 1 && auth()->user()->active == true ) {
                return redirect('/default1');
            } elseif(auth()->user()->choix == 2 && auth()->user()->active == true) {
                return redirect('/default2');
            } elseif(auth()->user()->choix == 3 && auth()->user()->active == true) {
                return redirect('/default3');
            }else {
                return redirect('/noactive');
            }
        }


        }
        

      
        return $next($request);

    }





    
}
