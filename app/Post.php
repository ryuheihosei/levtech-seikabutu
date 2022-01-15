<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'subject_id',
        'grade_id',
        'user_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('subject','grade','user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }
    
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
