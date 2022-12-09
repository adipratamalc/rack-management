<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisBarangController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::view('/', 'dashboard')->middleware('auth');

Route::view('/daftar-rak', 'daftarrak')->middleware('auth');
Route::view('/daftar-barang', 'daftarbarang')->middleware('auth');
Route::view('/cari-barang', 'caribarang')->middleware('auth');
Route::view('/detail-barang', 'detailbarang')->middleware('auth');
Route::view('/hasil-cari', 'hasilcari')->middleware('auth');

Route::resource('jenis-barang', JenisBarangController::class)->middleware('auth');
