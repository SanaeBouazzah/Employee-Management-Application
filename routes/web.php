<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;


Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/{employee}', [EmployeeController::class, 'delete'])->name('employees.delete');
