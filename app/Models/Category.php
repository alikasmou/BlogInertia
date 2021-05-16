<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    use HasFactory;

    public function blog()
    {

        // One Category Belongs to Many Blogs
        /*
            Ex:
            Categories : a, b, c
            1. Blog 1 => category a
            2. Blog 2 => category a
            3. Blog 3 => category c
            and so on....
        */
        return $this->belongsToMany(Blog::class,'blogs','category_id');

    }

}
