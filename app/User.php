<?php

namespace App;

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

}
