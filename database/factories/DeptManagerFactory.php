<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\DeptManager;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DeptManager>
 */
class DeptManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $assignedPairs = []; // Lưu các cặp đã dùng

        do {
            $emp_no = Employee::inRandomOrder()->value('emp_no') ?? Employee::factory()->create()->emp_no;
            $dept_no = Department::inRandomOrder()->value('dept_no') ?? Department::factory()->create()->dept_no;
            $pairKey = "$emp_no-$dept_no";
        } while (in_array($pairKey, $assignedPairs) || DeptManager::where('emp_no', $emp_no)->where('dept_no', $dept_no)->exists());

        // Thêm cặp vào danh sách đã chọn
        $assignedPairs[] = $pairKey;

        return [
            'emp_no' => $emp_no,
            'dept_no' => $dept_no,
            'from_date' => $this->faker->date('Y-m-d', '-5 years'),
            'to_date' => $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
