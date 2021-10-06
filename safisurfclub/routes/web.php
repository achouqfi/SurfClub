<?php

use Illuminate\Support\Facades\Mail;
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



Auth::routes();


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

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

//event route
Route::get('/event/table','App\Http\Controllers\EventController@index');
Route::post('/event/create','App\Http\Controllers\EventController@store');
Route::delete('/event/annulation/{id}','App\Http\Controllers\EventController@destroy');
Route::get('/event/table/{id}','App\Http\Controllers\EventController@edit');
Route::put('/update/event/{id}','App\Http\Controllers\EventController@update');

//newsleter route
Route::get('/newsletter/admin','App\Http\Controllers\NewsletterController@index');
Route::post('/newsleter','App\Http\Controllers\NewsletterController@store');
Route::delete('/newsleter/annulation/{id}','App\Http\Controllers\NewsletterController@destroy');

//reservation route
Route::get('/reservation/admin','App\Http\Controllers\ReservationController@index');
Route::post('/reservation','App\Http\Controllers\ReservationController@store');
Route::delete('/reservation/annulation/{id}','App\Http\Controllers\ReservationController@destroy');

//package route
Route::post('/package/add','App\Http\Controllers\PackageController@store');
Route::get('/package/table','App\Http\Controllers\PackageController@index');
Route::get('/package/table/{id}','App\Http\Controllers\PackageController@edit');
Route::put('/update/package/{id}','App\Http\Controllers\PackageController@update');
Route::delete('/delete/package/{id}','App\Http\Controllers\PackageController@destroy');

// feedBack route
Route::post('/feedBack','App\Http\Controllers\FeedBackController@store');
Route::get('/','App\Http\Controllers\Controller@frontOffice');
Route::get('/feedBack/table','App\Http\Controllers\FeedBackController@index');
Route::delete('/delete/feedBack/{id}','App\Http\Controllers\FeedBackController@destroy');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
