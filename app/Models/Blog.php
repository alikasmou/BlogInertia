<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;

    public function category()
    {

        return $this->hasOne(Category::class, 'category_id', 'id');

    }

    public function coverpage()
    {

        //ClassName::class , 'fk' , 'pk'
        //Default always snake case Ex : Model name User user_id
        // Each Blog has only one image stored in BlogImage Class
        return $this->hasOne(BlogImage::class, 'img_id', 'id');

    }

    public function user()
    {

        // Each Blog belongs to a single user
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

    public function comments()
    {
        // Each Blog has many commentes 
        return $this->hasMany(Comment::class, 'blog_id', 'id');

    }

}
