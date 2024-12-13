<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

// General routes
Route::get('/', [AuthController::class, 'index'])->name('landing');
Route::get('/login', [AuthController::class, 'loginview'])->name('loginview');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'registerview'])->name('registerview');
Route::post('/register/post', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:Admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // EO (Event Organizer) routes
    Route::middleware(['role:EO'])->group(function () {
        Route::get('/event/dashboard', [EventController::class, 'index'])->name('event.dashboard');
    });

    // General user routes (hanya untuk role selain Admin dan EO)
    Route::middleware(['user'])->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    });

    // Anda bisa menambahkan rute lainnya nanti
});



