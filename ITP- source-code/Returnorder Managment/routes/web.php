<?php
use illuminate\Support\Facades\Route;
use App\http\controllers\TaskController;

Route::get('/add', function () {
    return view('Superfashion');

});


Route::get('/table', function () {
$data=App\models\ReturnOrder::all();

    return view('returnordertable')->with('RtOrder',$data);

});

Route::post('/savedata','App\Http\Controllers\TaskController@store');


//delele

Route::GET('/delete/{id}','App\Http\Controllers\TaskController@remove');


//update
Route::get('/update/{id}','App\Http\Controllers\TaskController@showData');
//Route::post('/edit/{id}',[TaskController::class,'update']);
Route::post('/edit/{id}','App\Http\Controllers\TaskController@update');







 
























