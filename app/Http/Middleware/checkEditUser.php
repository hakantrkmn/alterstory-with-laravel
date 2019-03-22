<?php

namespace App\Http\Middleware;

use Closure;

class checkEditUser
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
        if(session()->has('user') and session('user.id')==$request->user->id)
        {
            return $next($request);
        }
        else
        {
            return redirect()->back()->withErrors(['Giriş Yapmadığınız veya Banlı olduğunuz için bu işlemi gerçekleştiremezsiniz']);
        }
    }
}
