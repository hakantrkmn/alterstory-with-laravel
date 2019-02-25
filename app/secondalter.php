<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secondalter extends Model
{
    public function parentfirstalter()
    {
        return $this->belongsTo('App\firstalter','parentid','id');
    }
}
