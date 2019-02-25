<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rootstory extends Model
{
    public function firstalters()
    {
        return $this->hasMany('App\firstalter','parentid','id');
    }
}
