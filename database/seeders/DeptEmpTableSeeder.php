<?php

namespace Database\Seeders;

use App\Models\DeptEmp;
use Illuminate\Database\Seeder;

class DeptEmpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeptEmp::factory()->count(300)->create();
    }
}
