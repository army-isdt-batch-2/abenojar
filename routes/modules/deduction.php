<?php

use Illuminate\Support\Facades\Route;

Route::get('/mandatory-deductions', [
    App\Http\Controllers\LoginController::class,
    'mandatorydeductions'
])->name('mandatorydeductions');

Route::get('/deductions/create', [
    App\Http\Controllers\LoginController::class,
    'deductions_create'
])->name('deduction.create');