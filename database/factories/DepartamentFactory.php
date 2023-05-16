<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departament>
 */
class DepartamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dep_name = $this->faker->randomElement(['A','B']);
        $dep_field = 'A' ? $this->faker->randomElement(['Informatyka',"Architekruta"]) : $this->faker->randomElement(['Pilotaż', 'Zarządzanie']);

        return [
            "name" => $dep_name,
            "field" => $dep_field,
            "places" => $this->faker->numberBetween(50,100),

        ];
    }
}
