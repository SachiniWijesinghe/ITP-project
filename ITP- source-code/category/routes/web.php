<?php

use App\Models\department;
use App\Models\category;
use App\Models\subcategory;
use App\Models\size;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SizeController;


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
//Route::get('/Department', function () {
        // $Data =department::all();
//      return view('Department',compact('$Dvalues','Dvalues'));
  //  return View::make('Department')->with('Data', $Data);


//})
Route::get('/Department',[DepartmentController::class,'show']);

Route::post('/departmentinsert',[DepartmentController::class,'store']); // insert link
Route::get('click_delete/{idDepartment}',[DepartmentController::class,'destroy']);
Route::get('click_edit/{idDepartment}',[DepartmentController::class,'showd']);
Route::post('/Depatup',[DepartmentController::class,'update']);

Route::get('/Category',[CategoryController::class,'show']);
Route::post('/categorytinsert',[CategoryController::class,'store']);
Route::get('click_deletec/{idCategory}',[CategoryController::class,'destroy']);
Route::get('click_editc/{idCategory}',[CategoryController::class,'showc']);
Route::post('/Catupd',[CategoryController::class,'update']);

Route::get('/Subcategory',[SubCategoryController::class,'show']);
Route::post('/subcategorytinsert',[SubCategoryController::class,'store']);
Route::get('click_deletes/{idSubcategory}',[SubCategoryController::class,'destroy']);
Route::get('click_edits/{idSubcategory}',[SubCategoryController::class,'shows']);
Route::post('/subCatupd',[SubCategoryController::class,'update1']);

Route::get('/Size',[SizeController::class,'show']);
Route::post('/sizeinsert',[SizeController::class,'store']);
Route::get('click_delete2/{idSize}',[SizeController::class,'destroy']);
Route::get('click_edit2/{idSize}',[SizeController::class,'shows']);
Route::post('/Sizeup',[SizeController::class,'update2']);