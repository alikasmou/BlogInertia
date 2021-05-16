<?php

namespace Database\Factories;

use App\Models\BlogImage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name;
        $slug = Str::slug($title);
        return [
            //
            'title' => $title,
            'slug' => $slug,
            'extention' => 'png',
            'is_deleted' => false,
            'src' => 'root/folder/'
        ];
    }
}
