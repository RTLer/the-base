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


Route::get('/admin/product', 'Admin\ProductController@index')
    ->name('admin.product.index');
Route::get('/admin/product/create', 'Admin\ProductController@create');
Route::post(
    '/admin/product/create',
    'Admin\ProductController@store'
)->name('admin.product.create');

Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit')
    ->name('admin.product.edit');
Route::post('/admin/product/edit/{id}', 'Admin\ProductController@update')
    ->name('admin.product.update');

Route::get('/admin/product/delete/{id}', 'Admin\ProductController@destroy')
    ->name('admin.product.delete');
