<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        if($request->session()->has('log')){
            return $next($request);//继续执行下一次请求
        }else{
            // 登录页面
            return redirect('/home/login');
        }
    }
}
