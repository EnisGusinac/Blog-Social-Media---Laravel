<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'content', 'likes'
    ];

   // protected $guarded = ['id'];

    public function getShortContentAttribute()
    {
        return substr($this->content, 0, 300) . "...";
    }

}
