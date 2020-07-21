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

Auth::routes();

Route::get('/', 'UserController@index')->name('home');
Route::get('/detail/{id}', 'UserController@show')->name('detail');
Route::get('/about', 'UserController@about')->name('about');
Route::get('/faq', 'UserController@faq')->name('faq');
Route::get('/produk/{id?}', 'UserController@produk')->name('produk');
Route::get('/promo/{id?}', 'UserController@promo')->name('promo');

Route::middleware(['auth','role:user'])->get('/cart', 'TransactionController@cart')->name('cart');
Route::middleware(['auth','role:user'])->get('/profile', 'UserController@cart')->name('profile');
Route::middleware(['auth','role:user'])->get('/success', 'UserController@success')->name('success');

Route::middleware(['auth','role:admin'])->get('/dashboard', 'AdminController@index')->name('dashboard');
