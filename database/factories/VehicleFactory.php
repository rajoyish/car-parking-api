<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'plate_number' => strtoupper(fake()->randomLetter()).fake()->numberBetween(100, 999),
        ];
    }
}
