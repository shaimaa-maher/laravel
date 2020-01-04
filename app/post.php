<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title', 'description'];





    // public function user()
    // {
    //     return $this->BelongsTo(User::class);
    // }
}
