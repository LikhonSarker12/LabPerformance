<?php

namespace App\Http\Middleware;

use Closure;

class customerTypeVerify
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
        if($request->session()->get('user')->type == 'employee'){
            return $next($request);
        }else{
            return redirect()->route('adminhome.index');
        }
    }
}
