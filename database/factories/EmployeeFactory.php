<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'emp_no' => $this->faker->unique()->numberBetween(10000, 99999),
            'birth_date' => $this->faker->date('Y-m-d', '-20 years'),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'hire_date' => $this->faker->date('Y-m-d', '-1 years'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
