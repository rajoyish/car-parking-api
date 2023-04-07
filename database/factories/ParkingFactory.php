<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking>
 */
class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'user_id' => fake()->randomNumber(1, 10),
            'vehicle_id' => fake()->randomNumber(1, 10),
            'zone_id' => fake()->randomNumber(1, 2),
            'start_time' => fake()->dateTime(),
            'stop_time' => fake()->dateTime(),
            'total_price' => fake()->numberBetween(100, 300),
        ];
    }
}
