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

// Route::get('/', function () {
//     // return view('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//contact route
Route::get('/contact/admin','App\Http\Controllers\ContactController@index');
Route::post('/contact','App\Http\Controllers\ContactController@store');
Route::delete('/contact/annulation/{id}','App\Http\Controllers\ContactController@destroy');

//gallery route
Route::get('/gallery/table','App\Http\Controllers\GalleryController@index');
Route::get('/gallery','App\Http\Controllers\GalleryController@index');
Route::post('/gallery/create','App\Http\Controllers\GalleryController@store');
Route::delete('/gallery/annulation/{id}','App\Http\Controllers\GalleryController@destroy');

//newsleter route
Route::get('/newsletter/admin','App\Http\Controllers\NewsletterController@index');
Route::post('/newsleter','App\Http\Controllers\NewsletterController@store');
Route::delete('/newsleter/annulation/{id}','App\Http\Controllers\NewsletterController@destroy');

//reservation route
Route::get('/reservation/admin','App\Http\Controllers\ReservationController@index');
Route::post('/reservation','App\Http\Controllers\ReservationController@store');
// Route::get('/reservation/table','App\Http\Controllers\ReservationController@admin');
// Route::put('/update/reservation/{id}','App\Http\Controllers\ReservationController@UserUpdate');
Route::delete('/reservation/annulation/{id}','App\Http\Controllers\ReservationController@destroy');

//package route
Route::post('/package/add','App\Http\Controllers\PackageController@store');
Route::get('/package/table','App\Http\Controllers\PackageController@index');
Route::get('/package/table/{id}','App\Http\Controllers\PackageController@edit');
Route::get('/package','App\Http\Controllers\PackageController@store');
Route::put('/update/package/{id}','App\Http\Controllers\PackageController@UserUpdate');
Route::delete('/delete/package/{id}','App\Http\Controllers\PackageController@destroy');

// feedBack route
Route::post('/feedBack','App\Http\Controllers\FeedBackController@store');
Route::get('/','App\Http\Controllers\FeedBackController@frontOffice');
Route::get('/feedBack/table','App\Http\Controllers\FeedBackController@index');
Route::delete('/delete/feedBack/{id}','App\Http\Controllers\FeedBackController@destroy');