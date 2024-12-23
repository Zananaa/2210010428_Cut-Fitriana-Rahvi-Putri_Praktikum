<?php

use App\Http\Controllers\RuangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\BarangController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', ["title" => "Dashboard"]);
})->name('dashboard');

Route::get('/sample', function () {
    return view('sample', ["title" => "Sample"]);
})->name('sample');

Route::group(['middleware' => 'guest'], function () {
    Route::resource('/ruang', RuangController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::resource('/pemasok', PemasokController::class);
    Route::resource('/barang', BarangController::class);
    Route::resource('/barang_masuk', BarangMasukController::class);
});
