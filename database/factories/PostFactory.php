<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id'=>1,
            'title'=>fake()->sentence(7, 11 ),
            'content'=>fake()->paragraph(rand(7,10),true),
            'path'=>fake()->sentence(7, 11 ),
        ];
    }
}
