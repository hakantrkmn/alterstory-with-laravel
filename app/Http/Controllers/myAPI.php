<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
