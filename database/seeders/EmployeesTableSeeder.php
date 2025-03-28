<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [
                'emp_no' => 1,
                'birth_date' => '1990-01-15',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'sex' => 'M',
                'hire_date' => '2015-06-20'
            ],
            [
                'emp_no' => 2,
                'birth_date' => '1988-03-10',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'sex' => 'F',
                'hire_date' => '2012-08-15'
            ],
        ]);
    }
}
