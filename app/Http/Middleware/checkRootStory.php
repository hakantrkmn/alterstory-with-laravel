<?php

namespace App\Http\Middleware;

use Closure;
use \Validator;
use Illuminate\Support\Facades\Input;

class checkRootStory
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
        $validator = Validator::make($request->all(), [
            'baslik'       => 'max:100|required',
           ]);
       
       if ($validator->fails() or !session()->has('user')) {    
           return redirect()->back()->withInput(Input::all())->withErrors($validator);
         }
         else
         {
            return $next($request);
         }
    }
}
