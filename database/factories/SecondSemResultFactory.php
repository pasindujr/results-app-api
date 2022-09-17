<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SecondSemResult>
 */
class SecondSemResultFactory extends Factory
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
            'object_oriented_programming' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'graphics_and_multimedia' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'data_structures_and_algorithm' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'system_analysis_and_design' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'data_communication_and_networking' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'statistics_for_it' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'human_values_and_professional_ethics' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
            'english_for_technology_2' => $this->faker->randomElement(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'E', 'I(SE)', 'DFR', 'AB', 'I(CA)', 'INC', 'I(CA)']),
        ];
    }
}
