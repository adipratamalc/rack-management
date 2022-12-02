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
  return view('dashboard');
});

Route::view('/login', 'login');
Route::view('/daftar-rak', 'daftarrak');
Route::view('/daftar-barang', 'daftarbarang');
Route::view('/cari-barang', 'caribarang');
Route::view('/detail-barang', 'detailbarang');
Route::view('/hasil-cari', 'hasilcari');
