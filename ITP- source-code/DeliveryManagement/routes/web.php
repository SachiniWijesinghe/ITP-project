<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueDeliveryController;
use App\Http\Controllers\OrderController;

//meka danna oni nathnm wada na.contraller eka import krgnna methent nthnm route eka hoynna ba laravel 8 wala
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

/*Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


Route::get('/issueDelivery', function () {
    return view('issueDel');                      
});

//to routing to view 
//Route::view('addsss','addMember'); -----------this is working

//Route::post('/SaveIssueDelivery','IssueDeliveryController@Store'); //controller ekat yana route eka  //inserting part
Route::POST('/SaveIssueDelivery',[App\Http\Controllers\IssueDeliveryController::class,'Store']);


Route::get('/viewallissueDelivery',[IssueDeliveryController::class,'show']);  //viewing part

//for delete ----------------------------------------------------------------------------------------------
//Route::get('/ListDelete',[IssueDeliveryController::class,'makeListForDelete']);
Route::get('delete/{id}',[IssueDeliveryController::class,'delete']);

//for edit -------------------------------------------------------------------------------------------------
// id eken data form ekt ghn pennanna
Route::get('edit/{id}',[IssueDeliveryController::class,'edit']); 

//for edit  edit eken yna data walat parth eka hdnna
Route::POST('/edit' , [IssueDeliveryController::class,'StoreEditedData']);
//     where noe i'm in    //where to go


//Route::view('searchpage','searchOrder');  //page ekt ynna
//Route::POST('/search',[OrderController::class,'searchOrder']);



//search by getting date                      //function name
Route::get('/search',[OrderController::class,'searchOrderX'])->name('web.search');   //mulinma methnin ptn gnna me rote eka ghla

Route::get('issue/{id}',[IssueDeliveryController::class,'issueDel']);

//controller ekat yana route eka  //inserting part   seach eke ewa
//meka damme apahu rederct wenna lesiyat search form ekt.for user friendlyness
Route::POST('/SaveIssueDeliveryFromSearchFile',[App\Http\Controllers\IssueDeliveryController::class,'StoreDataFromSearchedResults']);


//pending deliveries--------------------------------------------------------------------------------------
Route::get('/viewPendingDel',[IssueDeliveryController::class,'pending']);         //viewing part

//for edit  id eken data form ekt ghn pennanna
Route::get('editpending/{id}',[IssueDeliveryController::class,'editpendingX']);  //viewd pending deliveries go to form to edit

//for edit------------------------------------  edit eken yna data walat parth eka hdnna
Route::POST('/editpending' , [IssueDeliveryController::class,'StoreEditedPendingData']);
//     me dn inna thana    //me yana thana




///searchDayForReport------------------------------------------------------------------------------------


Route::get('/report',[OrderController::class,'searchOrderReport'])->name('web.searchDayForReport');


//------------------------------------------------------------------------------test---------------------
Route::get('Test/',[OrderController::class,'Test']);
