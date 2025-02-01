<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;



Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');

Route::get('/salaries/create', [SalaryController::class, 'create'])->name('salaries.create');
Route::post('/salaries/store', [SalaryController::class, 'store'])->name('salaries.store');
