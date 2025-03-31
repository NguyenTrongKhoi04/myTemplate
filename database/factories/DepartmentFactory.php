<?php

namespace Database\Factories;

use App\Models\Department\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Department\Department>
 */
class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        do {
             $dept_no = $this->faker->numberBetween(100, 999);
        } while (Department::where('dept_no', $dept_no)->exists());

        return [
            'dept_no' => $dept_no,
            'dept_name' => $this->faker->unique()->company(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
