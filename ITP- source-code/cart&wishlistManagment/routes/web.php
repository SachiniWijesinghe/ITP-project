<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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



Route::GET('/', [productController::class, 'getIndex']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/addToCart/{id}', [productController::class, 'getAddToCart']);
Route::get('/RemoveCart/{id}', [productController::class, 'removeFromCart']);

Route::get('/cart', function () {
    return view('shop.cart');
});
