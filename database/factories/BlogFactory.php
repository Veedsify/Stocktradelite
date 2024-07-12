<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph(10),
            'image' => $this->faker->imageUrl(),
            'author' => $this->faker->name,
            'category' => $this->faker->word,
            'tags' => $this->faker->words(3, true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->paragraph,
            'meta_keywords' => $this->faker->words(3, true),
            'meta_image' => $this->faker->imageUrl(),
            'meta_url' => $this->faker->url,
            'views' => $this->faker->numberBetween(0, 1000),
            'user_id' => 1,
        ];
    }
}
