<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user', 'content', 'post_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
