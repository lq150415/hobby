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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('/', 'HomeController');
Route::resource('user', 'HomeController');
Route::resource('sale', 'HomeController');
Route::resource('product', 'HomeController');
Route::resource('message', 'HomeController');
