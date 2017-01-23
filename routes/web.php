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
//these controllers are for users side
Route::get('/', 'FrontController@index')->name('home');
Route::get('/games', 'FrontController@games')->name('games');
Route::get('/game', 'FrontController@game')->name('game');
//login and logout for admin
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
  Route::get('/', function () {
    return view('admin.index');
  })->name('admin.index');
  //these routes are for item and platform 
  Route::resource('item','ItemsController');
  Route::resource('platform','PlatformsController');
});
