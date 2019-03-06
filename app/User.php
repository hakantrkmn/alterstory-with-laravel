<?php

namespace App;
use Illuminate\Support\Facades\Hash;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function rootstories()
    {
        return $this->hasMany('App\rootstory','kullanici_id','id');
    }
    public function firstalters()
    {
        return $this->hasMany('App\firstalter','kullanici_id','id');
    }
    public function secondalters()
    {
        return $this->hasMany('App\secondalter','kullanici_id','id');
    }
    public function loginUser(){

        
        $user = User::where('ad', $this->ad)->first();
        if ($user)
        {
         if(Hash::check("$this->sifre", $user->sifre))
         {
            session()->put('user', $user); 
            return 1;
         }
         else{
            return 0;
         }
            
            }
            else{
               
               return 0;
  
           }
         }
         public function checkExist(){

        
            $user = User::where('ad', $this->ad)->orWhere('mail', '=', $this->mail)->first();
            if ($user)
            {
                return 1;
                
                }
                else{
                   
                   return 0;
      
               }
             }

}
