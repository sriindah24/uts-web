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

Route::resource('barang','BarangController');
Auth::routes();
Route::get('/home', 'BarangController@index')->name('home');


Route::resource('ppl','PplController');
Auth::routes();
Route::get('/ppl', 'PplController@index')->name('home');

Route::resource('gudang','GudangController');
Auth::routes();
Route::get('/tampilgudang', 'GudangController@index')->name('tampilgudang');

Route::resource('penjualan','penjualanController');
Auth::routes();
Route::get('/tampilpenjualan', 'PenjualanController@index')->name('tampilpenjualan');