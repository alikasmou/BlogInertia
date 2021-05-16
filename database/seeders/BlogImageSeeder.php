<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Testing Title here';
        DB::table('blog_images')->insert([

            'title' => Str::lower($title),
            'slug' => Str::slug($title),
            'extention' => 'png',
            'is_deleted' => false,
            'src' => 'root/folder/'
        ]);
    }
}
