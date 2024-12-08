<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarKegiatanController;
use App\Http\Controllers\PerangkatdesaController;



Route::get('/', function () {
    return view('Berita');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/berita',BeritaController::class);

Route::resource('/daftar_kegiatan',controller: DaftarKegiatanController::class);

Route::resource('/perangkatdesa',controller: PerangkatdesaController::class);

