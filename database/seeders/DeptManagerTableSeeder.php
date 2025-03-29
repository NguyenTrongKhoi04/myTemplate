<?php

namespace Database\Seeders;

use App\Models\DeptManager;
use Illuminate\Database\Seeder;

class DeptManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeptManager::factory()->count(16)->create();
    }
}
