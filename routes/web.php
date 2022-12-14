<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RakController;

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
Route::view('/cari-barang', 'caribarang');
Route::view('/detail-barang', 'detailbarang');
Route::view('/hasil-cari', 'hasilcari');

Route::resource('jenis-barang', JenisBarangController::class);
Route::resource('daftar-barang', BarangController::class);
Route::resource('daftar-rak', RakController::class);
