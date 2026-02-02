<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title'=> $this->faker->title,
            'body'=> $this->faker->paragraphs(3 , true),
            'author' => $this->faker->name,
            'published' => $this->faker->boolean,
        ];
    }
}
