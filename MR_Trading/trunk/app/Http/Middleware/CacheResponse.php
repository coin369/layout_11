<?php 

namespace App\Http\Middleware;

use Closure;
use Cache;

class CacheResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $ttl=1440)
    {
            

        if(auth()->user() != null || $request->isMethod('post')  || env('APP_ENV')!="local")
            return $next($request);
        $params = $request->query(); unset($params['_method']); ksort($params);
        $key = "Page_".md5(url()->current().'?'.http_build_query($params));
        //if($request->get('_method')=='purge')
           // Cache::forget($key);
      //  echo $key;
        // if(Cache::has($key)){
        //  //   echo 'ok';exit;
        //     $cache = Cache::get($key);
           
        // }
        // else {
           
        //     echo 's';exit;
        // }
         $response = $next($request);
        $cache=Cache::remember($key,$ttl,function() use ($response) {
               // echo 'e';exit;
                if(!empty($response->content())){
                    return ['content' => $response->content()];
                }else{
                     return ['content' =>''];
                }
               // $response->header('X-Proxy-Cache', 'MISS');
        });
        
        $response = response($cache['content']);
        $response->header('X-Proxy-Cache', 'HIT');  


         return $response;//->header('Cache-Control','no-cache, public');
    }
}