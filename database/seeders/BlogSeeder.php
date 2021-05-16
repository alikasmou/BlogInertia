<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Testing Title here';

        DB::table('blogs')->insert([

            'user_id' => '1',
            'title' => Str::lower($title),
            'slug' => Str::slug($title),
            'excerpt' => Str::random(50),
            'content' => Str::random(50),
            'img_id' => '1',
            'user_id' => '1',
            'category_id' => '1'

        ]);
    }
}
