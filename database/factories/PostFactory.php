<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Post::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition()
    {
        return [
            'author_id' => \App\Models\User::factory(),
            'content' => $this->faker->text,
            'title' => $this->faker->sentence,
        ];
    }
}
