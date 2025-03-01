<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'post_id'];

    // Relasi Many to One dengan Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}