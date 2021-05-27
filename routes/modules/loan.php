<?php

use Illuminate\Support\Facades\Route;

Route::get('/loans', [
    App\Http\Controllers\LoginController::class,
    'loans'
])->name('loans'); 

Route::get('/loans/create', [
    App\Http\Controllers\LoginController::class,
    'loans_create'
])->name('loan.create');