<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'ProductController@index')->name('home');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'ProfilesController@index')->name('home');
Route::get('/', 'ProfilesController@index')->name('welcome');


Route::get('/home', 'ProductController@index')->name('home');
Route::get('/', 'ProductController@index')->name('home');

Route::get('/add-cart/{id}', [
	      'uses' => 'ProductController@getAddToCart',
	      'as' => 'addToCart'
	  ]);

Route::get('/checkout', [
		'uses' => 'ProductController@getCheckout',
		'as' => 'checkout'
]);

Route::post('/checkout', [
		'uses' => 'ProductController@postCheckout',
		'as' => 'checkout'
]);

Route::get('/cart', [
	      'uses' => 'ProductController@getCart',
	      'as' => 'shoppingCart'
	  ]);
Route::delete('/del/{id}', 'ProductController@destroy')->name('cart.destroy');


