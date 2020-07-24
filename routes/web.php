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

Route::middleware(['auth','role:admin'])->prefix('category')->group(function(){
    Route::get('/', 'CategoryController@index')->name('category');
    Route::get('/create', 'CategoryController@create')->name('category-add');
    Route::get('/{slug}', 'CategoryController@show')->name('category-detail');
    Route::put('/{id}', 'CategoryController@update')->name('category-update');
    Route::delete('/{id}', 'CategoryController@destroy')->name('category-destroy');
    Route::get('/{slug}/edit', 'CategoryController@edit')->name('category-edit');
    Route::post('/create', 'CategoryController@store')->name('category-store');
});

Route::middleware(['auth','role:admin'])->prefix('product')->group(function(){
    Route::get('/', 'ProductController@index')->name('product');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::post('/create', 'ProductController@store')->name('product.store');
    Route::get('/{slug}', 'ProductController@show')->name('product.show');
    Route::put('/{slug}', 'ProductController@update')->name('product.update');
    Route::get('/{slug}/edit', 'ProductController@edit')->name('product.edit');
});



Route::middleware(['auth','role:admin'])->get('/transaction', 'ProductController@index')->name('transaction');
Route::middleware(['auth','role:admin'])->get('/setting', 'ProductController@index')->name('setting');
