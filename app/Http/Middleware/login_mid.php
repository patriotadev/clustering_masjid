<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class login_mid
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
        if (!session('hasLogin')) {
            return redirect('/login');
        }
        return $next($request);
    }
}
