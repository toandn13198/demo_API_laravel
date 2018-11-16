<?php

namespace App\Http\Middleware;

use Closure;

class validateAPI
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
        $arr_access_method=array('GET','POST','PUT','DELETE');

        if(in_array($request->method(), $arr_access_method)) {
            return $next($request);
        }
        return Response()->json(['err'=>'06','message'=>'sai method API !']);
    }
}
