<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),
            'blog_id' => Blog::factory(),
            'comment' => $this->faker->sentence(8),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
