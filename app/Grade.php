<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
   
}
