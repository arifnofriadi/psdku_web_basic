<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa-edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::get('/mahasiswa-details', [MahasiswaController::class, 'details'])->name('mahasiswa.details');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas-create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas-edit', [KelasController::class, 'update'])->name('kelas.update');
Route::post('/kelas-tambah', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas-hapus/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
