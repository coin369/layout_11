<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
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
        if(Auth::check()){
            if((int)Auth::user()->role==1){
                return $next($request);
            }
            return redirect("/thong-tin-ca-nhan");
        }
          return redirect("/login");
        
    }
}
