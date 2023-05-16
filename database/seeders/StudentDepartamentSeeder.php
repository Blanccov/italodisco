<?php

namespace Database\Seeders;

use App\Models\Student_departaments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentDepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student_departaments::insert(
            [
                [
                    'student_id' => 1, 'departament_id' => 1
                ],


            ]
        );
    }
}

