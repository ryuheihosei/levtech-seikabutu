<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
    
    public function getBySubject(int $limit_count = 5)
    {
         return $this->posts()->with('subject')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
   
}
