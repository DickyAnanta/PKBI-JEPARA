<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; // Pastikan buat Controller ini
use App\Http\Controllers\Admin\ServiceController;   // Untuk menu Layanan
use App\Http\Controllers\Admin\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    // 1. Dashboard Utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/stats/update', [DashboardController::class, 'updateStats'])->name('stats.update');
    // 2. Menu Layanan (CRUD)
    Route::resource('layanan', ServiceController::class);

    // 3. Menu Berita (Menggunakan Prefix agar rapi)
    Route::prefix('berita')->name('berita.')->group(function () {
        // Berita Klinik
        Route::get('/klinik', [NewsController::class, 'klinik'])->name('klinik');
        // Berita Kartini
        Route::get('/kartini', [NewsController::class, 'kartini'])->name('kartini');

        // Route CRUD Berita umum
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::get('/{berita}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{berita}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{berita}', [NewsController::class, 'destroy'])->name('destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
