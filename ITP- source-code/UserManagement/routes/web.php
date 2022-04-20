<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddPrivilegesController;
use App\Models\Admin_Privilege;

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

Route::get('/addAdmin', function () {
    return view('addAdmin');
});

Route::get('/searchAdmin', function () {
    return view('searchAdmin');
});

// Route::get('/addAdminPrivileges', function () {
//     return view('addAdminPrivileges');
// });

Route::view('addPrivileges','addAdminPrivileges');
Route::post('addPrivileges',[AddPrivilegesController::class,'store']);
Route::get('addPrivileges',[AddPrivilegesController::class,'show']);
Route::get('click_delete/{id}',[AddPrivilegesController::class,'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
