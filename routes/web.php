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




Auth::routes();

Route::get('/', 'FrontendController@getMaster')->name('master');
Route::get('/contact', 'FrontendController@getContact')->name('contact');
Route::get('/cart', 'FrontendController@getCart')->name('cart');
Route::get('/checkout', 'FrontendController@getCheckout')->name('checkout');

