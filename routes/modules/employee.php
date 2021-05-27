<?php

use Illuminate\Support\Facades\Route;

Route::get('/employees', [
    App\Http\Controllers\LoginController::class,
    'employees'
])->name('employee');

Route::get('/employees/create', [
    App\Http\Controllers\LoginController::class,
    'employees_create'
])->name('employee.create');

