<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()
            ->count(80)
            ->hasFirstSemResults(1)
            ->hasSecondSemResults(1)
            ->hasThirdSemResults(1)
            ->hasFourthSemResults(1)
            ->create();
    }
}
