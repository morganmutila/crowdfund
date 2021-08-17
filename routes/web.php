<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/discover', function(){
    return view('discover', compact('user', $user));
})->name('discover');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::resource('/project', ProjectController::class);

// Authentication routes
require __DIR__.'/auth.php';

Route::fallback(function () {
    return 'That page does not exist sucker!';
});