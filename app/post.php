<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
   
    protected $fillable = ['title', 'description','user_id','slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}
