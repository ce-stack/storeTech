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

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');

//cart routes
Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show')->middleware('auth');
Route::get('/orders', 'OrderController@index')->name('orders')->middleware('auth');


//prodcut routes
Route::get('checkout/{amount}','ProductController@checkOut')->name('checkout');
Route::post('/charge' , 'ProductController@charge')->name('charge')->middleware('auth');
Route::get('cart','ProductController@showCart')->name('cart');
Route::get('/addToCart/{product}' , 'ProductController@addToCart')->name('cart.add')->middleware('auth');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove')->middleware('auth');
Route::get('/single-product/{product}', 'ProductController@single')->name('product.show')->middleware('auth');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');

//comment routes
Route::get('comments/{productId}','CommentController@index')->name('product.comments'); //show comment
Route::post('comments/store','CommentController@store')->name('product.store'); // store comment

//voyager routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
