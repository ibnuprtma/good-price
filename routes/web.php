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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopee', 'ShopeeSourceController@index')->name('shopee.index');
Route::get('/shopee/search/{id}/{method}','ShopeeSourceController@search')->name('shopee.search');
