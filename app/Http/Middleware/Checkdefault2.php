<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Checkdefault2
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
     
        if (Auth::guard($guard)->check() && auth()->user()->choix == 2 && auth()->user()->active == true) {

        return $next($request);
        }

         return redirect('/auth/login')->with('error','gggg');   
    }
}
