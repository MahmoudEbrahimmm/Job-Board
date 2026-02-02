<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'body' , 'published','author'
    ];
    public function commits(){
        return $this->hasMany(Commit::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
