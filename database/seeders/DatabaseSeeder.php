<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DepartmentsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(DeptEmpTableSeeder::class);
        $this->call(DeptManagerTableSeeder::class);
        $this->call(SalariesTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
    }
}
