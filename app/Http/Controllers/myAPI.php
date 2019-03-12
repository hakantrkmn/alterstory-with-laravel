<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;

class myAPI extends Controller
{
    public function apilogin(Request $request)
    {
        $user = new User;
        $user->sifre=$request->ksifre;
        $user->ad=$request->kadi;
         if ($user->loginUser()) 
         {
             $giris['durum']="1";
         }
         else
         {
             $giris['durum']="0";
         }   
        
         return($giris);

            
        
    }
    public function apisignin(Request $request)
    {
        $user = new User;
        $user->ad=$request->ad;
        $user->mail=$request->mail;
        $data= $user->checkExist();
        return($data);
            
    }
    public function apicheckname(Request $request)
    {
        $user = User::where('ad', '=', $request->kadi)->first();
        if ($user and $user->ad!=session('user.ad')) {
            return 1;
        }
        else
        {
            return 0;
        }
            
        
    }
    public function apiban()
    {
        $user = User::find(session('user.id'));
        if($user)
        {
            if ($user->ban==0) {
                return 0;
            }
            else
            {
                $user->banuser();
                return 1;
            }
        }
        else
        {
            return 0;

        }
        
            
        
    }
}
