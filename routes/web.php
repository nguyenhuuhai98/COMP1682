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

    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', 'ShoppingCartController@index')->name('get.cart');
        Route::get('/add-cart/{product}', 'ShoppingCartController@addCart')->name('add.product.to.cart');
        Route::get('/delete-cart-product/{product}', 'ShoppingCartController@deleteCart')->name('delete.product.from.cart');
        Route::get('/delete-list-cart/{product}', 'ShoppingCartController@deleteListCart')->name('delete.product.from.list.cart');
        Route::get('/update-cart/{product}', 'ShoppingCartController@updateCart')->name('update.cart');\
        Route::group(['middleware' => 'roleCustomer'], function (){
                Route::get('checkout', 'CheckoutController@checkoutForm')->name('checkout');
                Route::post('checkout', 'CheckoutController@checkout')->name('post.checkout');
                Route::post('apply-voucher', 'CheckoutController@applyVoucher')->name('apply.voucher');
        });
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin', 'middleware' => 'roleAdmin'], function() {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'show']]);
    Route::resource('products', 'ProductController', ['except' => ['create', 'show']]);
    Route::resource('users', 'UserController');
    Route::prefix('orders')->group(function () {
        Route::get('/', 'OrderController@index')->name('get.all.orders');
        Route::post('/update-status', 'OrderController@updateStatus')->name('update.status.delivery');
    });
    Route::get('daily-report', 'ReportController@dailyReport')->name('daily.report');
    Route::post('daily-report', 'ReportController@generateDailyReport')->name('generate.daily.report');
    Route::get('monthly-report', 'ReportController@monthlyReport')->name('monthly.report');
    Route::post('monthly-report', 'ReportController@generateMonthlyReport')->name('generate.monthly.report');
    Route::resource('vouchers', 'VoucherController', ['only' => ['index', 'store']]);
});
Route::group(['prefix' => 'staff', 'namespace' => 'Staff', 'middleware' => 'roleStaff'], function() {
    Route::get('/', 'StaffController@index')->name('staff.index');
    Route::post('/discount', 'StaffController@updateDiscountProducts')->name('update.discount.products');
});
Route::get('unauthorized', function () {
    return view('layouts.unauthorized');
})->name('unauthorized');
Route::get('about-us', function (){
    return view('pages.other.about');
})->name('about-us');
Route::get('contact', function () {
    return view('pages.other.contact');
})->name('contact');
Auth::routes();

