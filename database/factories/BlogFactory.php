<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        return [
            
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(2),
            'user_id' => '1',
            'img_id' => '1',
            'category_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
