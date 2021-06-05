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



Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/pelanggan','App\Http\Controllers\HomeController@cari');
Route::get('/pelanggan/tambah','App\Http\Controllers\PelangganController@tambah');
Route::get('/barang/tambah','App\Http\Controllers\PelangganController@nambah');
Route::get('/transaksi/tambah','App\Http\Controllers\PelangganController@ttambah');
Route::post('/pelanggan/store','App\Http\Controllers\PelangganController@store');
Route::post('/pelanggan/stored','App\Http\Controllers\PelangganController@stored');
Route::post('/pelanggan/storew','App\Http\Controllers\PelangganController@storew');
Route::get('/transaksi/edit/{id}','App\Http\Controllers\PelangganController@edit');
Route::post('/transaksi/update','App\Http\Controllers\PelangganController@update');
Route::get('/transaksi/hapus/{id}','App\Http\Controllers\PelangganController@hapus');


