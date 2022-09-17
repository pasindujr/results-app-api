<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FourthSemResult>
 */
class FourthSemResultFactory extends Factory
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
            'web_application_development' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'enterprise_architecture' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'professional_issues_in_it' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'computer_architecture' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'mobile_application_development' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'free_and_open_source_systems' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'individual_project' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'english_for_technology_4' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
        ];
    }
}
