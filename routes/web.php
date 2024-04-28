<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerAuthController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return 'Welcome to my Laravel application!';
});
Route::controller(SellerAuthController::class)->group(function () {
    Route::get('/login',  'login')->name('login');
    Route::post('/loginpost',  'loginpost')->name('loginpost');
    Route::get('/registers',  'register')->name('register');
    Route::post('/vendorregister', 'sellerRegister')->name('store');
    Route::get('/sellerotp',  'otp')->name('otp');
    Route::post('/registerotp',  'registerotp')->name('registerotp');
});

Route::middleware(['seller'])->group(function () {
    Route::get('/sellerdashboard', [SellerDashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [SellerAuthController::class, 'logout'])->name('logout');
    Route::resource('seller-profile', SellerProfileController::class);
    Route::resource('seller-profile', SellerProfileController::class);
    Route::resource('product', ProductController::class);
});

