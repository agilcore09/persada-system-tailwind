<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/home', function () {
        return view('core.dashboard');
    });
    Route::resource('/data-siswa', SiswaController::class);
    Route::get('/data-siswa/profile/{nis}', [SiswaController::class, 'ShowProfile']);
    Route::get('/tagihan/{nis}', [SiswaController::class, 'ShowTagihan']);
    Route::get('/cetak/{nis}', [SiswaController::class, 'nota']);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::get('/show-pendaftar', [PendaftaranController::class, 'index']);
    Route::delete('/pendaftar/{id}', [PendaftaranController::class, 'destroy']);
    Route::resource('/data-guru', GuruController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// landing routes
Route::get('/', function () {
    return view('landing.homepage');
});

Route::get('/about', function () {
    return view('landing.about');
});

Route::get('/daftarsmk', function () {
    return view('landing.smk');
});

Route::get('/daftarsmp', function () {
    return view('landing.smp');
});

// pendaftaran custom route
Route::post('/daftarsmk', [PendaftaranController::class, 'store']);
Route::post('/daftarsmp', [PendaftaranController::class, 'store']);


require __DIR__ . '/auth.php';
