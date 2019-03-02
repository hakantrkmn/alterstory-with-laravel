<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secondalter extends Model
{
    public function parentfirstalter()
    {
        return $this->belongsTo('App\firstalter','parentid','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','kullanici_id','id');
    }
}
