<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class firstalter extends Model
{
    public function asd()
    {
        return $this->hasMany('App\secondalter','parentid','id');
    }

    public function fillSecondAlters()
    {
        $this->devambir = secondalter::find($this->devambir);
        $this->devamiki = secondalter::find($this->devamiki);
        $this->devamuc = secondalter::find($this->devamuc);

    }
    public function parentrootStory()
    {
        return $this->belongsTo('App\rootstory','parentid','id');
    }
}
