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

Route::get('/', '\App\Http\Controllers\AppController@index')->name('home');
Route::post('/order', '\App\Http\Controllers\AppController@order')->name('order');
Route::post('/callback', '\App\Http\Controllers\AppController@callback')->name('callback');
Route::post('/cert-request', '\App\Http\Controllers\AppController@certRequest')->name('certRequest');
Route::post('/price-request', '\App\Http\Controllers\AppController@priceRequest')->name('priceRequest');
Route::post('/common-question', '\App\Http\Controllers\AppController@commonQuestion')->name('commonQuestion');
Route::post('/weight-calc', '\App\Http\Controllers\AppController@weightCalc')->name('weightCalc');
