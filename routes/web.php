<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Rute untuk menampilkan formulir input nilai mahasiswa
// Route::get('/', [MahasiswaController::class, 'index']);

// Rute untuk menyimpan data nilai mahasiswa
// Route::post('/store', [MahasiswaController::class, 'store']);

// Rute untuk menampilkan data mahasiswa
// Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);

Route::get('/', function () {
    return view('mahasiswa.form');
    });

Route::get('/mahasiswa', function () {
    return view('mahasiswa.form');
    });