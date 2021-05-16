<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

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

            'name' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(2),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
