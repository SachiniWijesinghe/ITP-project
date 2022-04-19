<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
    return view('home');
});


Route::POST('/register','App\Http\Controllers\RegistersController@register');
Route::get('customers',[CustomerController::class,'show']);

Route::get('search',[CustomerController::class,'searchC'])->name('web.search');


