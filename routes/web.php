<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[App\Http\Controllers\LandingPageController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::get('/shop/detail/{id}', [App\Http\Controllers\ShopController::class, 'show'])->name('show');

Route::get('/shop/category/{id}', [App\Http\Controllers\ShopController::class, 'category'])->name('category');

Route::post('/cart/store', [\App\Http\Controllers\CartController::class, 'store'])->name('store');

Route::patch('/cart/{id}',[\App\Http\Controllers\CartController::class, 'update'])->name('update');

Route::post('/checkout',[\App\Http\Controllers\CheckoutController::class, 'store' ])->name('store');