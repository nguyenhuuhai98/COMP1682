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
    Route::get('/category/{category}', 'PageController@getProductsByCategory')->name('get.products.by.category');

    Route::prefix('product/')->group(function () {
        Route::get('all-products', 'PageController@getAllProducts')->name('get.all.products');
        Route::get('{product}', 'PageController@getProductById')->name('get.product.by.id');
        Route::get('products-search', 'PageController@searchProducts')->name('search.product.by.name');
        Route::post('recently-view-products', 'PageController@recentlyViewProducts')->name('get.recently.viewed.product');
    });

    Route::prefix('cart')->group(function () {
        Route::get('/', 'ShoppingCartController@index')->name('get.cart');
        Route::get('/add-cart/{product}', 'ShoppingCartController@addCart')->name('add.product.to.cart');
        Route::get('/delete-cart-product/{product}', 'ShoppingCartController@deleteCart')->name('delete.product.from.cart');
        Route::get('/delete-list-cart/{product}', 'ShoppingCartController@deleteListCart')->name('delete.product.from.list.cart');
        Route::get('/update-cart/{product}', 'ShoppingCartController@updateCart')->name('update.cart');
        Route::get('checkout', 'ShoppingCartController@checkoutForm')->name('checkout');
        Route::post('checkout', 'ShoppingCartController@checkout')->name('post.checkout');
        Route::post('apply-voucher', 'ShoppingCartController@applyVoucher')->name('apply.voucher');
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin'], function() {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'show']]);
    Route::resource('products', 'ProductController', ['except' => ['create', 'show']]);
    Route::resource('users', 'UserController');
    Route::prefix('orders')->group(function () {
        Route::get('/', 'OrderController@index')->name('get.all.orders');
        Route::post('/update-status', 'OrderController@updateStatus')->name('update.status.delivery');
    });
});

Auth::routes();

