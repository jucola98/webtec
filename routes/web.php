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

use App\Http\Controllers\FrontendController;

Auth::routes();

Route::get('/', 'FrontendController@getMaster')->name('master');
Route::get('/contact', 'FrontendController@getContact')->name('contact');
Route::get('/shipping', 'FrontendController@getShipping')->name('shipping');
Route::get('/cart', 'CartController@cartGet')->name('cart');
Route::get('/wishlist', 'FrontendController@getWish')->name('wishlist');
Route::get('/checkout', 'FrontendController@getCheckout')->name('checkout');
Route::get('/singleprod/{macrocat}/{prodid}', 'ArticleController@fetchProductById')->name('singleprod');
Route::get('/products/{macrocat}/{category}', 'CategoryController@getProductsMacroCat')->name('products');
Route::get('/products/{macrocat}/{category}', 'CategoryController@getProductsMacroCat')->name('products');
Route::get('/products/{category_name}',  'CategoryController@getProdLike')->name('likeprod');
Route::get('/products','CategoryController@getSaleProd')->name('saleprod');

Route::post('/wishlistadd', 'WishlistController@addToWishlist')->name('wishlistadd');
Route::post('/wishlistdelete', 'WishlistController@deleteFromWishlist')->name('wishlistdelete');
Route::post('/clearwishlist', 'WishlistController@clearWishlist')->name('clearwishlist');

Route::post('/cartdelete', 'CartController@deleteFromCart')->name('cartdelete');
Route::post('/clearcart', 'CartController@clearCart')->name('clearcart');
Route::post('/editcartarticle', 'CartController@editCartArticle')->name('editCartArticle');
Route::post('/testroute','CartController@postTest')->name("testroute");
Route::post('/newsletter','NewsletterController@postNews')->name("postnews");
Route::post('/search','FrontendController@searchProduct')->name("searchProduct");
Route::post('/checkingout', 'CheckOutController@checkOutOperations')->name('checkingOut');
Route::post('/products/{macrocat}/{category}', 'CategoryController@productsMacroCatFilter')->name('productsPost');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    

});
