<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

// Halaman daftar semua mata kuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index'])
     ->name('matakuliah.index');

// Form tambah data
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
     ->name('matakuliah.create');

// Proses simpan data
Route::post('/matakuliah', [MatakuliahController::class, 'store'])
     ->name('matakuliah.store');

// Halaman detail berdasarkan ID
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])
     ->name('matakuliah.show');
