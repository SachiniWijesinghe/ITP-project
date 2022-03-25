<?php

use App\Models\department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;



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
Route::get('/cat', function () {
    $Dvalues =department::all();
//      return view('Department',compact('$Dvalues','Dvalues'));
    return View::make('Department')->with('Dvalues', $Dvalues);
});

Route::post('/department',[DepartmentController::class,'store']);



