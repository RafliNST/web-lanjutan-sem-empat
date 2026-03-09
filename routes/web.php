<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'showall'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/dosen', 'App\Http\Controllers\Dosen@get');
