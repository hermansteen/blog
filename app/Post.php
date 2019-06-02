<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * Post constructor.
     */
    protected $fillable = [
            'title', 'blurb', 'content'
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
