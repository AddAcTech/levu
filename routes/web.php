<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register',[RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::post('/tasks', [TaskController::class, 'store'])/* ->name('tasks.store') */;
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])/* ->name('tasks.complete') */;
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])/* ->name('tasks.destroy') */;