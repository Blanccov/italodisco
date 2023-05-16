<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Departament;
use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'pesel' => $this->faker->numberBetween(00000000000,99999999999),
            'email' => $this->faker->email(),
            'age' => $this->faker->numberBetween(18,30),
            'phone' => $this->faker->phoneNumber(),
            'address_id' => Address::factory(),
        ];
    }
}
