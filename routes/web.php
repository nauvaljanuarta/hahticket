<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/', [AuthController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'loginview'])->name('loginview');
Route::post('/login/post', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerview'])->name('registerview');
Route::post('/register/post', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [AdminController::class, 'index']);



Route::get('/event/dashboard', [EventController::class, 'index']);

Route::get('/dashboard', [UserController::class, 'index']);

