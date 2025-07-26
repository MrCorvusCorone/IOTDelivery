<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserRoleController;

Route::get('/', function () {
    // return view('welcome');
    return view('home.index');
});

// Home
Route::get('/home', [HomeController::class, 'index']);

// Registrasi
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login & Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// My Profile

// Users Settings
Route::get('/usersrole', [UserRoleController::class, 'index'])->middleware('isAdmin');
Route::patch('/usersrole/{id}/edit', [UserRoleController::class, 'update']);