<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $assignedPairs = []; // Lưu cặp đã dùng

        do {
            $emp_no = Employee::inRandomOrder()->value('emp_no') ?? Employee::factory()->create()->emp_no;
            $from_date = $this->faker->date('Y-m-d', '-5 years');
            $pairKey = "$emp_no-$from_date";
        } while (in_array($pairKey, $assignedPairs) || Salary::where('emp_no', $emp_no)->where('from_date', $from_date)->exists());

        $assignedPairs[] = $pairKey;

        return [
            'emp_no' => $emp_no,
            'salary' => $this->faker->numberBetween(30000, 150000),
            'from_date' => $from_date,
            'to_date' => $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
