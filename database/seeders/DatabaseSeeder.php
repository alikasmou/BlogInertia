<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Category;
use App\Models\BlogImage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            BlogImageSeeder::class,
            BlogSeeder::class,
            CommentSeeder::class
        ]);
        User::factory(20)->create();
        Category::factory(20)->create();
        BlogImage::factory(20)->create();
        Blog::factory(20)->create();
        Comment::factory(20)->create();
        
    }
}
