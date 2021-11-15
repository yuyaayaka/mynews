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
    Route::get('news/create', 'Admin\NewsController@add');
});
    // https://XXXXXX.com/XXX/
    // AAAControllerのbbbというAction に渡す
// 課題3
Route::get('XXX', 'AAAController@bbb');

//　課題4
// https://XXXXXX.com/admin/profile/create
 
 Route::get('profile/create', 'Admin\ProfileController@add');
 Route::get('profile/edit', 'Admin\ProfileController@edit');