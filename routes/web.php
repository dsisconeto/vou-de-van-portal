<?php

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

Use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/obrigado', 'thank-you')->name('thank-you');
Route::post('/company', 'RegisterController@company')->name('company');
Route::post('/passenger', 'RegisterController@passenger')->name('passenger');
