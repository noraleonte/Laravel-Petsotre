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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/category/{id}', 'App\Http\Controllers\ProductController@index');
Route::get('/products', 'App\Http\Controllers\ProductController@all')->name('products');
Route::post('/products/create', 'App\Http\Controllers\ProductController@create')->middleware('admin'); //ad,in
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show');
Route::post('/products', 'App\Http\Controllers\ProductController@store')->middleware('admin');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy')->middleware('admin'); //admin
Route::post('/products/edit/{id}', 'App\Http\Controllers\ProductController@edit')->middleware('admin'); //admin
Route::post('/products/store_edit/{id}', 'App\Http\Controllers\ProductController@store_edit')->middleware('admin');



Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@store');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@store');

Route::post('/logout', 'App\Http\Controllers\Auth\LogoutController@store')->name('logout')->middleware('auth');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart')->middleware('auth');
Route::post('/add/{id}', 'App\Http\Controllers\CartController@create')->middleware('auth');

Route::post('/order/{id}', 'App\Http\Controllers\OrderController@create')->middleware('auth');
Route::get('/orders', 'App\Http\Controllers\OrderController@index')->middleware('auth');


Route::delete('/cart/remove/{id}', 'App\Http\Controllers\CartController@destroy')->middleware('auth');
Route::delete('/cart/empty/{id}', 'App\Http\Controllers\CartController@empty')->middleware('auth');


Route::get('/profile',  function () {
    return view('profile');
})->middleware('auth');


//admin

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::post('/categories/create', 'App\Http\Controllers\AdminController@create_cat');
Route::post('/categories/add', 'App\Http\Controllers\AdminController@store_cat');
Route::delete('/categories/remove/{id}', 'App\Http\Controllers\AdminController@delete_cat');
Route::post('/order/edit/{id}', 'App\Http\Controllers\AdminController@edit_order');
