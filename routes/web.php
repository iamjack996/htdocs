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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
Route::get('/admin_test', ['as' => 'admin', 'uses' => 'AdminController@admin_test']);



// 前台

Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
