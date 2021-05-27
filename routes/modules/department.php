<?php

use Illuminate\Support\Facades\Route;

Route::get('/departments', [
    App\Http\Controllers\DepartmentController::class,
    'index'
])->name('department');

Route::get('/departments/create', [
    App\Http\Controllers\DepartmentController::class,
    'create'
])->name('deparment.create');

Route::post('/departments/create/save', [
    App\Http\Controllers\DepartmentController::class,
    'create_save'
])->name('deparment.create.save');