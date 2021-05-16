<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {

        // Each comment belongs to only one user
        return $this->belongsTo(User::class, 'user_id');
    
    }

    public function blog()
    {
        
        // Each comment belongs to only one blog
        return $this->belongsTo(Blog::class, 'blog_id');
    
    }
}
