<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $registration_number = 'KEG/IT/2019/F/00'.$this->faker->numberBetween(1,100);

        return [
            'name' => $this->faker->firstName().' '.$this->faker->lastName(),
            'registration_number' => $registration_number,
            'email' => $this->faker->freeEmail(),
            'contact_number' => $this->faker->e164PhoneNumber(),
            'birth_year' => $this->faker->randomElement(['1996' , '1997', '1998', '1999']),
            'gpa' => $this->faker->randomFloat(1, 0, 4),
        ];
    }
}
