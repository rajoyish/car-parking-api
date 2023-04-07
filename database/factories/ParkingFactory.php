<?php

namespace Database\Factories;

use Carbon\Carbon;
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
        // Creating 1 hour interval
        $startTime = Carbon::instance(fake()->dateTimeBetween('-1 week', 'now'));
        $stopTime = (clone $startTime)->addHour();

        // Generating zone id to calculate total price
        $zoneId = fake()->randomElement([1, 2, 3]);

        return [
            'user_id' => fake()->randomNumber(1, 10),
            'vehicle_id' => fake()->randomNumber(1, 10),
            'zone_id' => $zoneId,
            'start_time' => $startTime,
            'stop_time' => $stopTime,
            'total_price' => $zoneId * 100,
        ];
    }
}
