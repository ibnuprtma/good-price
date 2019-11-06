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
    return view('welcome');
});


Route::resource('tokopedia', 'TokopediaSourceController');
Route::resource('shopee', 'ShopeeSourceController');

Route::get('/shopee/stemming/data','ShopeeSourceController@stemming')->name('shopee.stemming');
Route::get('/shopee/token/data','ShopeeSourceController@token')->name('shopee.token');
Route::get('/shopee/case/data','ShopeeSourceController@case')->name('shopee.case');
Route::get('/shopee/stop/data','ShopeeSourceController@stop')->name('shopee.stop');