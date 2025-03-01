<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingMenuUserController;


Route::get('/coba', function () {
    return view ('coba');
});
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

        //user
        Route::get('/admin/user',[UserController::class,'index']);
        Route::post('/admin/user/add',[UserController::class,'store'])->name('user.store');
        Route::put('/admin/user/edit/{id}',[UserController::class,'update'])->name('user.update');
        Route::delete('/admin/user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');

        //role
        Route::get('/admin/role',[RoleController::class,'index']);
        Route::post('/admin/role/add',[RoleController::class,'store'])->name('role.store');
        Route::put('/admin/role/edit/{id}',[RoleController::class,'update'])->name('role.update');
        Route::delete('/admin/role/delete/{id}',[RoleController::class,'destroy'])->name('role.destroy');

        //menu
        Route::get('/admin/menu',[MenuController::class,'index']);
        Route::post('/admin/menu/add',[MenuController::class,'store'])->name('menu.store');
        Route::put('/admin/menu/edit/{id}',[MenuController::class,'update'])->name('menu.update');
        Route::delete('/admin/menu/delete/{id}',[MenuController::class,'destroy'])->name('menu.destroy');
        //setting
        Route::get('/admin/{role}/settings', [SettingMenuUserController::class, 'index'])->name('role.settings');
        Route::put('/admin/{role}/menus', [SettingMenuUserController::class, 'updateMenus'])->name('role.updateMenus');

        //event category
        Route::get('/event/categories', [EventController::class, 'category'])->name('event.categories');
        Route::post('/event/category/add', [EventController::class, 'storecategory'])->name('category.store');
        Route::put('/event/category/edit/{eventCategory}', [EventController::class, 'updatecategory'])->name('event.category.update');
        Route::delete('/event/category/delete/{eventCategory}', [EventController::class, 'destroycategory'])->name('event.category.destroy');
       //event and detail
        Route::get('/event/index', [EventController::class, 'event']);
        Route::get('/event/index/form', [EventController::class, 'createevent'])->name('event.create');
        Route::post('/event/category/add', [EventController::class, 'storeevent'])->name('event.store');
        Route::get('/event/index/detail/{id}', [EventController::class, 'detail'])->name('event.detail');

        Route::put('/event/category/edit/{eventCategory}', [EventController::class, 'updatecategory'])->name('event.category.update');
        Route::delete('/event/category/delete/{eventCategory}', [EventController::class, 'destroycategory'])->name('event.category.destroy');

    });

    // EO (Event Organizer) routes
    Route::middleware(['role:EO'])->group(function () {
        Route::get('/event/dashboard', [EventController::class, 'index'])->name('event.dashboard');
    });

    // General user routes (hanya untuk role selain Admin dan EO)
    Route::middleware(['user'])->group(function () {
         //dashboard customer
         Route::get('/dashboard', [CustomerController::class, 'index'])->name('user.dashboard');
         Route::get('event/{slug}/{id}', [CustomerController::class, 'show'])->name('event.show');
         //checkout
         Route::get('/checkout', [CustomerController::class, 'checkout'])->name('checkout.form');
         Route::post('/checkout', [CustomerController::class, 'checkoutstore'])->name('checkout.store');
         // pemesanan
         Route::get('/order', [CustomerController::class, 'order'])->name('order');
         // Route::post('/pembayaran', [CustomerController::class, 'pembayaran'])->name('pembayaran');
         Route::get('/order/detail/{id}', [CustomerController::class, 'orderdetail'])->name('order.detail');

         Route::post('/handle-payment/{id}', [CustomerController::class, 'handlePayment'])->name('handlePayment');
         Route::get('/transactions', [CustomerController::class, 'transactions'])->name('transactions');
    });

    // Anda bisa menambahkan rute lainnya nanti
});