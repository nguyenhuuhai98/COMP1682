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
Route::prefix('/')->group(function() {
    Route::get('/', 'PageController@index')->name('pages.index');
    Route::get('/products/{category}', 'PageController@getProductsByCategory')->name('get.products.by.category');
    Route::get('/product/{product}', 'PageController@getProductById')->name('get.product.by.id');
    Route::get('products', 'PageController@getAllProducts')->name('get.all.products');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin'], function() {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'show']]);
    Route::resource('products', 'ProductController', ['except' => ['create', 'show']]);
    Route::resource('users', 'UserController');
});
