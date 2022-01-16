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
Route::group(['prefix' => 'admin'], function() {
    // https://test.com/admin/news/create
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
});
    // https://XXXXXX.com/XXX/
    // AAAControllerのbbbというAction に渡す
// 課題3
Route::get('XXX', 'AAAController@bbb');

//　課題4
// https://XXXXXX.com/admin/profile/create
 
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
