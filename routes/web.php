<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DahboardController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SearchController;

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

//search routes
Route::controller(SearchController::class)->group(function () {
  Route::get('/cari', 'index')->middleware('auth');
  Route::get('/find', 'search')->name('search')->middleware('auth');
});

Route::resource('/', DahboardController::class)->middleware('auth');
Route::resource('jenis-barang', JenisBarangController::class)->middleware('auth');
Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('rak', RakController::class)->middleware('auth');
