<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndikatorKinerjaController;
use App\Http\Controllers\KinerjaUtamaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard Utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');
    // Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    // Laporan
    Route::resource('/laporans', LaporanController::class);
    Route::get('/cetak-pdf', [LaporanController::class, 'cetakPDF'])->name('cetak.pdf');

    // Admin Middleware Group
    Route::middleware('admin')->group(function () {
        Route::resource('/catatans', CatatanController::class);
        Route::get('/catatans/{catatan}/edit/{tw}', [CatatanController::class, 'edit'])->name('catatans.edit');

        Route::resource('/kinerja', KinerjaUtamaController::class)->except(['create', 'show']);
        Route::post('/kinerja', [KinerjaUtamaController::class, 'store'])->name('kinerja.store');
        Route::get('/kinerja', [KinerjaUtamaController::class, 'index'])->name('kinerja.index');
        Route::delete('/kinerja/{id}', [KinerjaUtamaController::class, 'destroy'])->name('kinerja.destroy');
        Route::get('/kinerja/{id}/edit', [KinerjaUtamaController::class, 'edit'])->name('kinerja.edit');
        Route::put('/kinerja/{id}', [KinerjaUtamaController::class, 'update'])->name('kinerja.update');

        Route::get('/indikator/create', [IndikatorKinerjaController::class, 'create'])->name('indikator.create');
        Route::post('/indikator/store', [IndikatorKinerjaController::class, 'store'])->name('indikator.store');
        Route::get('/indikator/{id}/edit', [IndikatorKinerjaController::class, 'edit'])->name('indikator.edit');
        Route::put('/indikator/{id}', [IndikatorKinerjaController::class, 'update'])->name('indikator.update');
        Route::delete('/indikator/{id}', [IndikatorKinerjaController::class, 'destroy'])->name('indikator.destroy');

        // Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
        // Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
        // Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
        // Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
        // Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
        // Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->name('pegawai.show');
        // Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

        Route::get('/carousels', [CarouselController::class, 'index'])->name('carousels.index');
        Route::get('/carousels/create', [CarouselController::class, 'create'])->name('carousels.create');
        Route::post('/carousels', [CarouselController::class, 'store'])->name('carousels.store');
        Route::get('/carousels/{carousel}/edit', [CarouselController::class, 'edit'])->name('carousels.edit');
        Route::put('/carousels/{carousel}', [CarouselController::class, 'update'])->name('carousels.update');
        Route::delete('/carousels/{carousel}', [CarouselController::class, 'destroy'])->name('carousels.destroy');
    });

    // Tambahkan fitur user jika diperlukan
    Route::middleware('user')->group(function () {
        // Kosong sementara
    });

});

require __DIR__ . '/auth.php';
