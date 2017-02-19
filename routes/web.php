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
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/{categories}', 'ProductsController@index');
Route::get('/{categories}/{product}', 'ProductsController@show');
Route::get('/products/create', 'ProductsController@addProducts');
Route::post('/products/create', 'ProductsController@store');
//Route::get('/products/{product}', 'ProductsController@show');

