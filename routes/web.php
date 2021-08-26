<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/discover/{category?}', [PageController::class, 'discover'])->name('discover');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');


Route::get('/users/{user}/projects', [UserController::class, 'userProjects'])->name('user-projects');
Route::get('/users/{user}/contributions', [UserController::class, 'userContributions'])->name('user-contributions');
Route::get('/users/{user}', [UserController::class, 'index'])->name('profile');


// Authentication routes
require __DIR__.'/auth.php';

Route::fallback([PageController::class, 'noPage404'])->name('404page');