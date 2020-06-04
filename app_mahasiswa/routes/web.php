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

Route::resource('nonbarang','NonbarangController');
Auth::routes();
Route::get('/nonbarang', 'NonbarangController@index')->name('nonbarang');

Route::resource('nonadminpembeli','NonadminpembeliController');
Auth::routes();
Route::get('/nonadminpembeli', 'NonadminpembeliController@index')->name('nonadminpembeli');

Route::resource('gudang','GudangController');
Auth::routes();
Route::get('/tampilgudang', 'GudangController@index')->name('tampilgudang');

Route::resource('penjual','PenjualController');
Auth::routes();
Route::get('/tampilpenjual', 'PenjualController@index')->name('tampilpenjual');

Route::resource('pembeli','PembeliController');
Auth::routes();
Route::get('/tampilpembeli', 'PembeliController@index')->name('tampilpembeli');

Route::resource('penjualan','PenjualanController');
Auth::routes();
Route::get('/tampilpenjualan', 'PenjualanController@index')->name('tampilpenjualan');

Route::resource('pembeli','PembeliController');
Auth::routes();
Route::get('/tampilpembeli', 'PembeliController@index')->name('tampilpembeli');

Route::resource('detailpenjualan','DetailPenjualanController');
Auth::routes();
Route::get('/tampildetailpenjualan', 'DetailPenjualanController@index')->name('tampildetailpenjualan');

Route::resource('pembelian','PembelianController');
Auth::routes();
Route::get('/tampilpembelian', 'PembelianController@index')->name('tampilpembelian');

Route::resource('detailpembelian','DetailpembelianController');
Auth::routes();
Route::get('/tampildetailpembelian', 'DetailpembelianController@index')->name('tampildetailpembelian');

Route::resource('supplier','SupplierController');
Auth::routes();
Route::get('/tampilsupplier', 'SupplierController@index')->name('tampilsupplier');