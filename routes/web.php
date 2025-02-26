<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa-edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas-create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas-edit', [KelasController::class, 'update'])->name('kelas.update');

