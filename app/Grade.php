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
    
    public function getByGrade(int $limit_count = 5)
    {
         return $this->posts()->with('grade')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
   
}
