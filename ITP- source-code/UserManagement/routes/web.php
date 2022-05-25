<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddPrivilegesController;
use App\Http\Controllers\AddAdminController;

use App\Models\Admin_Privilege;
use App\Models\Admin;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registerAdmin', function () {
    return view('registerAdmin');
});

Route::get('/searchAdmin', function () {
    return view('searchAdmin');
});

// Route::get('/addAdmin', function () {
//     return view('addAdmin');
// });

// Route::get('/addAdminPrivileges', function () {
//     return view('addAdminPrivileges');
// });

Route::view('addPrivileges','addAdminPrivileges');
Route::post('addPrivileges',[AddPrivilegesController::class,'store']);
Route::get('addPrivileges',[AddPrivilegesController::class,'show']);
Route::get('click_delete/{id}',[AddPrivilegesController::class,'delete']);
Route::get('click_edit/{id}',[AddPrivilegesController::class,'edit']);
Route::post('update',[AddPrivilegesController::class,'update']);
//Route::get('/addAdmin',[AddPrivilegesController::class,'index']);

//Route::get('addAdmin',[AddAdminController::class,'index']);
Route::post('registerAdmin',[AddAdminController::class,'getData']);
//Route::post('addAdmin',[AddAdminController::class,'add']);
//Route::view('addAdmin','addAdmin');

Route::get('addAdmin',[AddAdminController::class,'show']);
Route::post('addAdmin',[AddAdminController::class,'addData']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
