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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'MovieController@index')->name('home');
    Route::get('/movie/up', 'MovieController@updates')->name('movie');
    Route::resource('movie', 'MovieController');
});





Route::group( [ 'prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::resource('users', 'UserController');
    Route::get('/shows', 'UserController@shows')->name('shows');
});