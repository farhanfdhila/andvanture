<?php

use App\Http\Controllers\MemoryController;

// Halaman utama
Route::get('/', [MemoryController::class, 'index']);

// Halaman Tentang
Route::view('/about', 'about');

// Halaman detail (pakai {slug} biar dinamis)
Route::get('/cerita/{slug}', [MemoryController::class, 'show']);