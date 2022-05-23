<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sizeController;

Route::get('/add-items', function () {
    $sizedata = App\Models\Sizes::all();
    $colordata = App\Models\Colors::all();
    return view('dashboard')->with('color',$colordata)->with('size',$sizedata);
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
    $sizedata = App\Models\Sizes::all();
    return view('size')->with('size',$sizedata);
});

Route::post('/addsize', 'App\Http\Controllers\sizeController@store');

Route::get('/deletesize/{id}', 'App\Http\Controllers\sizeController@deletesize');


Route::get('/colors', function () {
    $colordata = App\Models\Colors::all();
    return view('colors')->with('color',$colordata);
});

Route::post('/addcolor', 'App\Http\Controllers\colorController@store');

Route::get('/deletecolor/{id}', 'App\Http\Controllers\colorController@deletecolor');

Route::get('/update', function () {
    return view('update');
});

Route::get('/test-update', function () {
    return view('test-update');
});

//customer item view page
Route::get('/items', function () {
    $data=App\Models\Items::all();
    return view('itemshowpage')->with('items', $data);
});

//item details page
Route::get('/itemdetails/{id}', 'App\Http\Controllers\itemsController@itemdetails');

