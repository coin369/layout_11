<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Customer
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
            if((int)Auth::user()->role==2){
                return $next($request);
            }
            if((int)Auth::user()->role==1){
                return redirect("/admin/index/index");
            }
        }
        return redirect("/dang-nhap");
    }
}
