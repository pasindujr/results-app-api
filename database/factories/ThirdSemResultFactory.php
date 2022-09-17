<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ThirdSemResult>
 */
class ThirdSemResultFactory extends Factory
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
            'computer_systems_and_computer_security' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'it_project_management' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'principles_of_management_and_applied_economics' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'rapid_application_development' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'principles_of_software_engineering' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'object_oriented_analysis_and_design' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'group_project' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'english_for_technology_3' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
        ];
    }
}
