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
Route::name('front.')
    ->namespace('Front')
    ->group(function () {
        Route::name('product.')->prefix('/product')->group(function () {
            Route::get('/', 'ProductController@index')
                ->name('index');
        });
    });

Route::name('admin.')
    ->prefix('/admin')
    ->middleware(['auth', 'is_admin'])
    ->namespace('Admin')
    ->group(function () {
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

            Route::get('/delete/{id}', 'ProductController@destroy')
                ->name('delete');
        });
        Route::name('productCategory.')->prefix('/productCategory')->group(function () {

            Route::get('/', 'ProductCategoryController@index')
                ->name('index');

            Route::get('/create', 'ProductCategoryController@create')
                ->name('create');
            Route::post('/create', 'ProductCategoryController@store')
                ->name('store');

            Route::get('/edit', 'ProductCategoryController@edit')
                ->name('edit');
            Route::post('/edit', 'ProductCategoryController@update')
                ->name('update');

            Route::get('/delete/{id}', 'ProductCategoryController@destroy')
                ->name('delete');
        });
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
