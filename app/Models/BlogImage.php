<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;
    public function blog(){

        // Image belongs to many blogs 
        return $this->belongsToMany(Blog::class,'blogs','img_id');

    }
}
