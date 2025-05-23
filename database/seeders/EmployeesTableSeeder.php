<?php
namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    public function run(): void
    {
        Employee::factory()->count(200)->create();
    }
}
