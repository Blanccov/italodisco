<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voivodeship' => $this->faker->address(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'house_number'=>$this->faker->buildingNumber(),
            'postal_code' =>$this->faker->postcode(),
        ];
    }
}
