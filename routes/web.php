<?php

use Illuminate\Support\Facades\Route;
 
foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

/**
  * Routes below should be moved to 
  * their respective folders in module
 */


// Route::get('/table', [
//     App\Http\Controllers\LoginController::class,
//     'table'
// ]);

// Route::get('/layout', [
//     App\Http\Controllers\LoginController::class,
//     'layout'
// ]);

// Route::get('/form', [
//     App\Http\Controllers\LoginController::class,
//     'form'
// ]);













 








