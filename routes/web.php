<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [TestController::class, 'test'])->name('index');


//Route::get('auth/google', [GoogleController::class, 'loginWithGoogle'])->name('auth.google');
//Route::get('auth/google/callback', [GoogleController::class, 'googleCallback']);


Route::middleware('auth')->group(function () {

    Route::get('/', [AppController::class, 'index'])->name('index');

    Route::get('password', [AppController::class, 'password'])->name('app.password');
    Route::post('password', [AppController::class, 'updatePassword'])->name('app.password.update');

    Route::get('profile', [AppController::class, 'profile'])->name('app.profile');
    Route::post('profile', [AppController::class, 'updateProfile'])->name('app.profile.update');

    Route::get('orders', [OrderController::class, 'index'])->name('app.orders');
    Route::get('orders/new', [OrderController::class, 'create'])->name('app.orders.new');
    Route::post('orders/create', [OrderController::class, 'processOrder'])->name('app.orders.create');

    Route::get('products', [ProductController::class, 'index'])->name('app.products');

    Route::prefix('products')->group(function () {
        Route::get('logitech-stream-cam', [ProductController::class, 'webcam'])->name('products.webcam');
        Route::get('lg-dualup-monitor', [ProductController::class, 'monitor1'])->name('products.monitor-1');
        Route::get('dell-ultrasharp', [ProductController::class, 'monitor2'])->name('products.monitor-2');
        Route::get('sennheiser-momentum-4', [ProductController::class, 'headset1'])->name('products.headset-1');
        Route::get('sony-wh-1000xm4', [ProductController::class, 'headset2'])->name('products.headset-2');
        Route::get('beyerdynamic-mmx-300-headset', [ProductController::class, 'headset3'])->name('products.headset-3');
    });
});

require __DIR__.'/auth.php';
