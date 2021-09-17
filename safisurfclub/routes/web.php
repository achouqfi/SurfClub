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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// contact route
Route::get('/contact/admin','App\Http\Controllers\ContactController@index');
Route::post('/contact','App\Http\Controllers\ContactController@store');
Route::delete('/contact/{id}','App\Http\Controllers\ContactController@destroy');

// gallery route
Route::get('/gallery/table','App\Http\Controllers\ContactController@index');
Route::get('/gallery','App\Http\Controllers\ContactController@index');
Route::post('/gallery/cret','App\Http\Controllers\ContactController@store');
Route::delete('/gallery/{id}','App\Http\Controllers\ContactController@destroy');

// newsleter route
Route::get('/contact/admin','App\Http\Controllers\ContactController@index');
Route::post('/contact','App\Http\Controllers\ContactController@store');
Route::delete('/contact/{id}','App\Http\Controllers\ContactController@destroy');

// reservation route
Route::get('/reservation/admin','App\Http\Controllers\ReservationController@index');
Route::post('/reservation','App\Http\Controllers\ReservationController@store');
// Route::get('/reservation/table','App\Http\Controllers\ReservationController@admin');
Route::put('/update/reservation/{id}','App\Http\Controllers\ReservationController@UserUpdate');
Route::delete('/annulation/{id}','App\Http\Controllers\ReservationController@destroy');

// package route
Route::post('/package/add','App\Http\Controllers\ShapController@store');
Route::get('/package/table','App\Http\Controllers\ShapController@store');
Route::get('/package','App\Http\Controllers\ShapController@store');
Route::put('/update/package/{id}','App\Http\Controllers\ShapController@UserUpdate');
Route::delete('/delete/package/{id}','App\Http\Controllers\ShapController@destroy');

// feedBack route
Route::post('/feedBack','App\Http\Controllers\ShapController@store');
Route::get('/feedBack/create','App\Http\Controllers\ContactController@index');
Route::get('/feedBack/table','App\Http\Controllers\ShapController@admin');
Route::delete('/delete/feedBack/{id}','App\Http\Controllers\ShapController@destroy');