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

//Route::view('/', 'logout');


Route::get('/', 'ProductController@index')->name('home');


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'ProfilesController@index')->name('home');
Route::get('/', 'ProfilesController@index')->name('welcome');


Route::get('/home', 'ProductController@index')->name('home');
Route::get('/', 'ProductController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart.index');

//Route::get('/home','DasboardController@index')->name('dashboard');
