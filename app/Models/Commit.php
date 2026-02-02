<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    protected $table = 'commits';
    protected $fillable = [
        'author','content','post_id',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
