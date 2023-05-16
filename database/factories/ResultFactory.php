<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_subject" => $this->faker->randomElement(['angielski', 'matematyka', 'polski']),
            "second_subject" => $this->faker->randomElement(['angielski', 'matematyka', 'polski']),
            "third_subject" => $this->faker->randomElement(['angielski', 'matematyka', 'polski']),
            "first_percent" => $this->faker->numberBetween(0,100),
            "second_percent" => $this->faker->numberBetween(0,100),
            "third_percent" => $this->faker->numberBetween(0,100),
        ];
    }
}
