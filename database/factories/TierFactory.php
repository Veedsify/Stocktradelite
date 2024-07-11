<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tier>
 */
class TierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $prices = [
            5000,
            10000,
            50000,
            100000,
            500000,
            1000000,
        ];

        return [
            'name' => $this->faker->randomElement(['Basic', 'Standard', 'Premium', 'Platinum']),
            'min' => $this->faker->randomElement($prices),
            'max' => $this->faker->randomElement($prices),
            'price' => $this->faker->randomElement($prices),
            'currency' => $this->faker->currencyCode(),
            'description' => $this->faker->sentence(),
        ];
    }
}
