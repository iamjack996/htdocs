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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin_test', 'AdminController@admin_test')->name('admin_test');
Route::get('/category_setting', 'CategoryController@category_setting')->name('category_setting');
Route::post('/add_category', 'CategoryController@store')->name('add_category');


// 前台
Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
