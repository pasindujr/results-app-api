<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FirstSemResult>
 */
class FirstSemResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'personal_computer_application' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'computer_hardware' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'structured_programming' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'data_representation_and_organization' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'database_management_system' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'web_development' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'mathematics_for_computing' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'english_for_technology_1' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
        ];
    }
}
