<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([

            'user_id' => '1',
            'blog_id' => '1',
            'comment' => 'Hello this is test coment from db seeder',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
