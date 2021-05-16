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

    public function user(){

        //return $this->belongsTo(User::class);

    }

    public function comments(){

        //return $this->hasMany(Comment::class);

    }

    public function categories(){

        //return $this->belongsTo(Cateory::class);

    }
}
