<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rootstory extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',

    ];
    public function firstalters()
    {
        return $this->hasMany('App\firstalter','parentid','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','kullanici_id','id');
    }
}
