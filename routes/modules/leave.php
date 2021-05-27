<?php

use Illuminate\Support\Facades\Route;

Route::get('/leaves', [
    App\Http\Controllers\LoginController::class,
    'leaves'
])->name('leaves');

Route::get('/leaves/create', [
    App\Http\Controllers\LoginController::class,
    'leaves_create'
])->name('leave.create');