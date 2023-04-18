<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>  $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'picture' => $this->faker->imageUrl(640, 480, 'cats'),
            'user_id' => 1
        ];
    }
}
