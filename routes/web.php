<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DepartmentController::class, 'index']);

Route::resource('department', DepartmentController::class);
Route::prefix('department')->controller(DepartmentController::class)->group(function () {
    Route::get('ajax-edit', 'ajaxEdit');
});

Route::resource('employees', EmployeeController::class);
