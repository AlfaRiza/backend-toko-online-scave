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
Route::middleware(['auth','role:user'])->get('/profile', 'UserController@profile')->name('profile');
Route::middleware(['auth','role:user'])->post('/success', 'UserController@success')->name('success');

Route::middleware(['auth','role:admin'])->get('/dashboard', 'AdminController@index')->name('dashboard');

Route::middleware(['auth','role:admin'])->get('/category', 'CategoryController@index')->name('category');
Route::middleware(['auth','role:admin'])->get('/category/{slug}', 'CategoryController@show')->name('category-detail');
Route::middleware(['auth','role:admin'])->put('/category/{id}', 'CategoryController@update')->name('category-update');
Route::middleware(['auth','role:admin'])->delete('/category/{id}', 'CategoryController@destroy')->name('category-destroy');
Route::middleware(['auth','role:admin'])->get('/category/{slug}/edit', 'CategoryController@edit')->name('category-edit');
Route::middleware(['auth','role:admin'])->get('/category/create', 'CategoryController@create')->name('category-add');
Route::middleware(['auth','role:admin'])->post('/category/create', 'CategoryController@store')->name('category-store');


Route::middleware(['auth','role:admin'])->get('/product', 'ProductController@index')->name('product');
Route::middleware(['auth','role:admin'])->get('/transaction', 'ProductController@index')->name('transaction');
Route::middleware(['auth','role:admin'])->get('/setting', 'ProductController@index')->name('setting');
