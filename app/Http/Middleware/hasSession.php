<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class hasSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('id')){
            return redirect('/cms/dashboard');
        }
        return $next($request);
    }
}
