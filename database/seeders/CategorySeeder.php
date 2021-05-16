<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            'name' => 'Category 1',
            'slug' => 'category-1',
            'excerpt' => Str::random(50),
            'content' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
