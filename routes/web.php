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

// Routes public or without authentication
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
// Routes private or with authentication
Route::middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    //
});

