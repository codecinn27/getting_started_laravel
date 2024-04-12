<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salary = fake()->numberBetween(30000, 100000);
        $formattedSalary = '$' . number_format($salary) . ' USD';

        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => $formattedSalary,
        ];
    }
}
