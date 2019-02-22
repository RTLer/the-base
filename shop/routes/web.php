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

Route::get('/', 'HomeController@index');


Route::get('/admin/product', 'Admin\ProductController@index');
Route::get('/admin/product/create', 'Admin\ProductController@create');
Route::post('/admin/product/create', 'Admin\ProductController@store');
