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

Route::get('/', 'ProductsController@home');

Route::get('/products','ProductsController@view_products');

Route::get('/edit/{id}','ProductsController@edit');

Route::post('/store','ProductsController@store');

Route::patch('/update/{id}','ProductsController@update');

Route::delete('/delete/{id}','ProductsController@delete');

Route::get('/view_category','ProductsController@view_category');

Route::get('/create_category','ProductsController@create_category');

Route::post('/storeCategory','ProductsController@storeCategory');

Route::delete('/deleteCategory/{id}','ProductsController@deleteCategory');

Route::get('/editCategory/{id}', 'ProductsController@editCategory');

Route::patch('/updateCategory/{id}','ProductsController@updateCategory');
