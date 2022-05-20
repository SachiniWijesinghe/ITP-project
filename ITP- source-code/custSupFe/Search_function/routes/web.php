<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PdfController;

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

Route::resource('/contact', ContactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/feedback', FeedbackController::class);
//Route::get('pdf',[PdfController::class, 'generatePDF']);




//Route::post('/search-record', 'FeedbackController@search');



//Route::post('addS', [SuggestionController::class, 'addS']);


