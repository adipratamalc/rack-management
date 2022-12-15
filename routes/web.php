<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a gro`up which
| contains the "web" middleware group. Now create something great!
|
*/


//auth routes
Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'index')->name('login')->middleware('guest');
  Route::post('/login', 'login')->middleware('guest');
  Route::get('/logout', 'logout')->middleware('auth');
});

Route::view('/', 'dashboard')->middleware('auth');
Route::view('/cari-barang', 'caribarang')->middleware('auth');
Route::view('/detail-barang', 'detailbarang')->middleware('auth');
Route::view('/hasil-cari', 'hasilcari')->middleware('auth');

Route::resource('jenis-barang', JenisBarangController::class)->middleware('auth');
Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('rak', RakController::class)->middleware('auth');
