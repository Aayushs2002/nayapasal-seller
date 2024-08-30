<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerAuthController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerOrderController;
use App\Http\Controllers\Seller\SellerProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome to my Laravel application!';
});
Route::get('/seller', function () {
    return view("Seller.home.index");
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'Migration has been successfully';
});

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Application all kind of cache has been cleared';
});
Route::controller(SellerAuthController::class)->group(function () {
    Route::get('/login',  'login')->name('login');
    Route::post('/loginpost',  'loginpost')->name('loginpost');
    Route::get('/registers',  'register')->name('register');
    Route::post('/vendorregister', 'sellerRegister')->name('store');
    Route::get('/sellerotp',  'otp')->name('otp');
    Route::post('/registerotp',  'registerotp')->name('registerotp');
    Route::get('/resetpassword', 'index')->name('resetpassword');
    Route::post('/otp', 'store')->name('resetpasswords');
    Route::get('/checkotp/{token}', 'otps')->name('otps');

    Route::post('/checkresetotp/{token}', 'checkresetotp')->name('checkresetotp');
    Route::get('/checkresetotp/{token}', 'getresetotp')->name('getresetotp');
    Route::post('/changepassword/{token}','changepasswords')->name('changepasswords');



});

Route::middleware(['seller'])->group(function () {
    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [SellerAuthController::class, 'logout'])->name('logout');
    Route::get('setting', [SellerProfileController::class, 'setting'])->name('setting');
    Route::post('paymentdetails', [SellerProfileController::class, 'paymentdetails'])->name('paymentdetails');
    Route::resource('seller-profile', SellerProfileController::class);
    // Route::resource('seller-profile', SellerProfileController::class);
        // from dashboard
        Route::get('/seller/changepassword', [SellerProfileController::class, 'sellerchangepassword'])->name('sellerchangepassword');

        Route::post('/seller/changepassword', [SellerProfileController::class, 'changepassword'])->name('changepassword');
    Route::resource('product', ProductController::class);
    Route::get('productimage/{product}', [ProductController::class, 'imagecreate'])->name('myimage');
    Route::post('productimage/{product_id}', [ProductController::class, 'productImage'])->name('productImage');
    Route::delete('productimage/{img}', [ProductController::class, 'deleteImage'])->name('deleteImage');
    Route::get('/order', [SellerOrderController::class, 'order'])->name('order');
    Route::get('order/details/{details}', [SellerOrderController::class, 'orderdetail'])->name('order.details');
});
