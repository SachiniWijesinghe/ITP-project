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


Route::get('click-delete/{id}',[CustomerController::class,'delete']);

//loging
Route::get('/login',[CustomerController::class,'login']);
Route::post('login-user',[CustomerController::class,'loginUser'])->name('login-user');


//log weddi update form ekata ynawa
Route::get('/dashboard',[CustomerController::class,'dashboard']);

Route::get('profileView',[CustomerController::class,'profileView']);




Route::get('logout',[CustomerController::class,'logout']);




