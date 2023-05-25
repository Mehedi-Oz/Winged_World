<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WingedController;
use App\Http\Controllers\DashboardController;

Route::get('/', [WingedController::class, 'index'])->name('home');

Route::get('/user-login', [WingedController::class, 'userLogin'])->name('user-login');
Route::get('/user-register', [WingedController::class, 'userRegister'])->name('user-register');

Route::get('/contact-us', [WingedController::class, 'contactUs'])->name('contact-us');
Route::get('/about-us', [WingedController::class, 'aboutUs'])->name('about-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-seller', [DashboardController::class, 'addSeller'])->name('add-seller');
    Route::get('/manage-seller', [DashboardController::class, 'manageSeller'])->name('manage-seller');

    Route::get('/add-category', [DashboardController::class, 'addCategory'])->name('add-category');
    Route::get('/manage-category', [DashboardController::class, 'manageCategory'])->name('manage-category');

//    Route::get('/login', [DashboardController::class, 'adminLogin'])->name('login');
//    Route::get('/register', [DashboardController::class, 'adminRegister'])->name('register');

});
