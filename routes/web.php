<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AnalisisController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/hari/{hari}', [JadwalController::class, 'hari'])->name('jadwal.hari');
Route::get('/jadwal/{id}', [JadwalController::class, 'show'])->whereNumber('id')->name('jadwal.show');
Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis.index');
Route::get('/analisis/bentrok', [AnalisisController::class, 'bentrok'])->name('analisis.bentrok');
Route::get('/analisis/aman', [AnalisisController::class, 'aman'])->name('analisis.aman');
Route::get('/ringkasan', [DashboardController::class, 'ringkasan'])->name('ringkasan');
Route::get('/tentang', [DashboardController::class, 'tentang'])->name('tentang');
