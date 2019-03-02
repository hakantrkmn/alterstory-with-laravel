<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\rootstory;

class userController extends Controller
{
    public function loginUser(Request $request){
        
        $user = User::where('ad', $request->kullanici_adi)->first();
        if (Hash::check("$request->kullanici_sifre", $user->sifre))
        {
             $request->session()->put('user', $user); 
              return redirect('/1');
            }
    }
    public function signinUser(Request $request){
        $user = new User;
        $user->ad=$request->adi;
        $user->sifre=Hash::make($request->sifre);
        $user->mail=$request->mail;
        $user->save();
        return redirect('/1');

 
     }
     public function userdetail($name){

        $user = User::where('ad', '=', $name)->first();
        return view('website/profil', compact('user'));

 
     }
     public function logoutuser(){
        Session::forget('user');
        return redirect('/1');

 
     }
}
