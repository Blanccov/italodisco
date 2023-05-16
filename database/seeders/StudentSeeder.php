<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()
            ->count(25)
            ->create();
    }
    // Student::insert(
        //     [
        //         [
        //             'name' => 'Jan', 'lastname' => 'Kowalski', 'pesel' => 9999999, 'email' => 'jan@emial.com', 'age' => 22, 'phone' => 999999999
        //         ],

        //     ]
        // );
}
