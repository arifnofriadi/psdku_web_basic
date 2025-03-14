<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// route mahasiswa
Route::prefix('mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::get('/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::get('/details/{id}', [MahasiswaController::class, 'details'])->name('mahasiswa.details');
    Route::post('/tambah', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
});

// route kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/kelas-create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas-edit/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::post('/kelas-tambah', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas-hapus/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
Route::post('/kelas-update/{id}', [KelasController::class, 'updateProcess'])->name('kelas.update-process');
