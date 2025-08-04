<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UsersController;

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

// Users List
Route::get('/userslist', [UsersController::class, 'index'])->name('userslist')->middleware('auth');
Route::post('/userslist/{user}/edit', [UsersController::class, 'edit']); 
Route::patch('/userslist/{user}/edit', [UsersController::class, 'update']); 

// Users Role
Route::get('/usersrole', [UserRoleController::class, 'index'])->middleware('isAdmin');
Route::put('/usersrole/{id}/edit', [UserRoleController::class, 'update']);

// APIController untuk akses API
Route::get('/checkkota/{provinsi}', [APIController::class, 'checkKota']);
Route::get('/getkota/{provinsi}', [APIController::class, 'getKota']);
Route::get('/checkkecamatan/{kota}', [APIController::class, 'checkKecamatan']);
Route::get('/getkecamatan/{kota}', [APIController::class, 'getKecamatan']);
Route::get('/checkkelurahan/{kecamatan}', [APIController::class, 'checkKelurahan']);
Route::get('/getkelurahan/{kecamatan}', [APIController::class, 'getKelurahan']);