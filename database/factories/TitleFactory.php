<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Title>
 */
class TitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $assignedPairs = [];

        do {
            $emp_no = Employee::inRandomOrder()->value('emp_no') ?? Employee::factory()->create()->emp_no;
            $from_date = $this->faker->date('Y-m-d', '-5 years');
            $title = $this->faker->jobTitle();
            $pairKey = "$emp_no-$title-$from_date";
        } while (in_array($pairKey, $assignedPairs)
        || Title::where('emp_no', $emp_no)
            ->where('title', $title)
            ->where('from_date', $from_date)
            ->exists());

        $assignedPairs[] = $pairKey;

        return [
            'emp_no' => $emp_no,
            'title' => $title,
            'from_date' => $from_date,
            'to_date' => $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
