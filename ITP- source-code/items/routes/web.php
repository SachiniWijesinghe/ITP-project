<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/add-items', function () {
    return view('dashboard');
});

Route::post('/view-items', 'App\Http\Controllers\itemsController@store');

Route::get('/all-items', function () {
    $data=App\Models\Items::all();
    return view('viewitems')->with('items', $data);
});

Route::get('/deleteitem/{id}', 'App\Http\Controllers\itemsController@deleteitem');

Route::get('/updateitem/{id}', 'App\Http\Controllers\itemsController@updateitem');

Route::post('/update-items', 'App\Http\Controllers\itemsController@itemsupdate');


Route::get('/size', function () {
    return view('size');
});

Route::get('/colors', function () {
    return view('colors');
});