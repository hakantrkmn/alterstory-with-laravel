<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use App\rootstory;

class userController extends Controller
{
    
         
         
    public function signinUser(Request $request){

        $user = new User;
        $user->ad=$request->adi;
        $user->sifre=Hash::make($request->sifre);
        $user->mail=$request->mail;
        $mailer = new mailer;
        $mailer->sendMail($user);
        $user->save();
        session()->put('user', $user); 
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

     public function edituser(User $user){
      return view('website/edituser', compact('user'));


   }
   public function useredit(Request $request, User $user){
      $image = $request->file('image');
      $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
      $path = public_path('/images');
      $image->move($path,$input['imagename']);
      File::delete('images/' . $user->img);
      $user->ad=$request->ad;
      $user->bio=$request->bio;
      $user->img=$input['imagename'];
      $user->save();
      Session::forget('user');
      return redirect('/1');
      


   }
}
