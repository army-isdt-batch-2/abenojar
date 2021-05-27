<?php

use Illuminate\Support\Facades\Route;

Route::get('/payslips', [
    App\Http\Controllers\LoginController::class,
    'payslips'
])->name('payslips');

Route::get('/payslips/create', [
    App\Http\Controllers\LoginController::class,
    'payslips_create'
])->name('payslip.create');

Route::get('/payslip/view', [
    App\Http\Controllers\LoginController::class,
    'payslip_view'
])->name('payslip.view');