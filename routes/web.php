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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/staff', 'StaffController@index')->name('staff');
Route::get('/stockist', 'StockistController@index')->name('stockist');
Route::get('/user', 'UserController@index')->name('user');

Route::resource('products', 'ProductController');
Route::resource('staff', 'StaffController');
Route::resource('stockists', 'StockistController');
Route::resource('users', 'UserController');
