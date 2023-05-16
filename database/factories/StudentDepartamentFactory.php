<?php

namespace Database\Factories;

use App\Models\Departament;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_departament>
 */
class StudentDepartamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "student_id" => Student::factory(),
            "departament_id" => Departament::factory(),
        ];
    }
}
