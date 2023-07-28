<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/features', 'App\Http\Controllers\MainController@features');

Route::get('/pricing', 'App\Http\Controllers\MainController@pricing');

Route::get('/reviews', 'App\Http\Controllers\MainController@reviews')->name('reviews');

Route::post('/reviews/check', 'App\Http\Controllers\MainController@reviews_check');