<?php

use Illuminate\Support\Facades\Route;

Route::get('/timekeeping', [
    App\Http\Controllers\LoginController::class,
    'timekeeping'
])->name('timekeeping');

Route::get('/timekeeping/create', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_create'
])->name('timekeeping.create');

Route::get('/timekeeping/view', [
    App\Http\Controllers\LoginController::class,
    'timekeeping_view'
])->name('timekeeping.view');