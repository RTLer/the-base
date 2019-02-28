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

use Illuminate\Support\Facades\Route;

Route::redirect('/landing', '/');
//Route::get('/', 'HomeController@index');
Route::view('/', 'welcome');

Route::name('admin.')->prefix('/admin')->namespace('Admin')->group(function () {
    Route::name('product.')->prefix('/product')->group(function () {

        Route::get('/', 'ProductController@index')
            ->name('index');

        Route::get('/create', 'ProductController@create')
            ->name('create');
        Route::post('/create', 'ProductController@store')
            ->name('store');

        Route::get('/edit', 'ProductController@edit')
            ->name('edit');
        Route::post('/edit', 'ProductController@update')
            ->name('update');

        Route::get('/product/delete/{id}', 'ProductController@destroy')
            ->name('delete');
    });
});
