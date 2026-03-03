<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\YouthCenterController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Public Routes (Akses Tanpa Login)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Layanan Publik (Bento Grid)
Route::get('/layanan', [ServiceController::class, 'indexPublik'])->name('layanan.publik');

// Halaman Berita Utama (Daftar Berita)
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');

// Halaman Baca Berita (Detail Berita)
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');

// Halaman Youth-Center
Route::get('/youth-center', [YouthCenterController::class, 'index'])->name('youth-center');

//Halaman Tentang Kami
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');


/*
|--------------------------------------------------------------------------
| Admin Routes (Wajib Login & Verified)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {

    // 1. Dashboard Utama Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/stats/update', [DashboardController::class, 'updateStats'])->name('stats.update');

    // 2. Menu Layanan CRUD (Resource: index, create, store, edit, update, destroy)
    Route::resource('layanan', ServiceController::class);

    // 3. Menu Kelola Berita
    Route::prefix('berita')->name('admin.berita.')->group(function () {
        Route::get('/klinik', [NewsController::class, 'klinik'])->name('klinik');
        Route::get('/kartini', [NewsController::class, 'kartini'])->name('kartini');

        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/store', [NewsController::class, 'store'])->name('store');
        Route::get('/{berita}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{berita}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{berita}', [NewsController::class, 'destroy'])->name('destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
