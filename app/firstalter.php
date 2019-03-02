<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class firstalter extends Model
{
    public function secondalters()
    {
        return $this->hasMany('App\secondalter','parentid','id');
    }
    public function parentStory()
    {
        return $this->belongsTo('App\rootstory','parentid','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','kullanici_id','id');
    }
    public function izin()
    {
        if (session('user.ad')!=$this->user->ad) {
            if (count($this->secondalters)<3) {
                return 1;
            }
        }
        return 0;
        
    }

}
