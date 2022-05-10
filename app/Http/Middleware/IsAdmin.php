<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_admin == "chefDep"){
            return $next($request);
        }
         elseif(auth()->user()->is_admin == "chefPro"){
             return $next($request);
         }
         elseif(auth()->user()->is_admin == "spl"){
             return $next($request);
         }
         else{
            return $next($request);  
         }
          return redirect(‘home’)->with(‘error’,"Vous n'avez pas d'accès administrateur.");
        
    }
}
