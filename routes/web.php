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

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/Goal', function () {
    return view('Goal');
});

Route::get('/help', function () {
    return view('help');
});

Route::resource('/tasks', 'TaskController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name("home");


Route::get('auth/google', ['as' => 'auth/google', 'uses' => 'Auth\LoginController@redirectToGoogle']);

Route::get('auth/google/callback', ['as' => 'auth/google/callback', 'uses' => 'Auth\LoginController@handleGoogleCallback']);
