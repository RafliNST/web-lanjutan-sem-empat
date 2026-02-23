<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', 'App\Http\Controllers\Mahasiswa@get');

Route::get('/dosen', 'App\Http\Controllers\Dosen@get');
