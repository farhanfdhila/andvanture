<?php

use App\Http\Controllers\MemoryController;

// Halaman utama
Route::get('/', [MemoryController::class, 'index']);

// Halaman detail (pakai {slug} biar dinamis)
Route::get('/cerita/{slug}', [MemoryController::class, 'show']);