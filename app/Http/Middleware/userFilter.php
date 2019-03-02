<?php

namespace App\Http\Middleware;

use Closure;

class userFilter
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
        if(session()->has('user') and session('user.ban')==0)
        {
           // dump(session('user'));
            return $next($request);
        }
        else
        {
            return redirect()->back()->withErrors(['Giriş Yapmadığınız veya Banlı olduğunuz için bu işlemi gerçekleştiremezsiniz']);
        }
    }
}
