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
    // redirect()->route('wharever you want');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');
// Route::get('/', 'HomeController@medicalFeatIndex')->name('welcome');

Route::get('/Mediacal', 'HomeController@medicalIndex')->name('medical');
Route::get('/Furnitrue', 'HomeController@furnitrueIndex')->name('furnitrue');


Route::get('/about', 'AboutController@index')->name('about');

Route::get('/addToCart/{product}' , 'ProductController@addToCart')->name('cart.add')->middleware('auth');

Route::get('cart','ProductController@showCart')->name('cart');

Route::get('checkout/{amount}','ProductController@checkOut')->name('checkout');

Route::post('/charge' , 'ProductController@charge')->name('charge')->middleware('auth');

Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show')->middleware('auth');

Route::get('/orders', 'OrderController@index')->name('orders')->middleware('auth');

Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove')->middleware('auth');

Route::get('/single-product/{product}', 'ProductController@single')->name('product.show')->middleware('auth');

Route::put('/products/{product}', 'ProductController@update')->name('product.update');

//comment routes
Route::get('comments/{productId}','CommentController@index')->name('product.comments');
Route::post('comments/store','CommentController@store')->name('product.store');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
