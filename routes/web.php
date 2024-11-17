<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/home', function () {
    return view('janu');
});
Route::get('/coba', function () {
    return view('coba');
});

Route::get('/login', [AuthController::class, 'loginview'])->name('login.view');
Route::get('/register', [AuthController::class, 'registerview'])->name('register.view');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
