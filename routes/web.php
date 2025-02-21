<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa-edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
