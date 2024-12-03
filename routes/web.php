<?php

use App\Http\Controllers\Auth\LoginMahasiswaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Mahasiswa\DashboardMahasiswaController;
use App\Http\Middleware\AuthenticateMahasiswa;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.landing');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::get('/login-mahasiswa', function () {
    return view('layout.landing');
});

// Route::get('/login-mahasiswa', [LoginMahasiswaController::class, 'showLoginForm'])->name('mahasiswa.login.form');
Route::post('/login-mahasiswa', [LoginMahasiswaController::class, 'login'])->name('mahasiswa.login');
Route::get('/logout-mahasiswa', [LoginMahasiswaController::class, 'logout'])->name('mahasiswa.logout');


Route::middleware([AuthenticateMahasiswa::class])->group(function () {
    Route::get('/dashboard-mahasiswa', [DashboardMahasiswaController::class, 'index'])->name('dashboard.mahasiswa');
    Route::post('/konfirmasi/simpan', [DashboardMahasiswaController::class, 'simpanKonfirmasi'])->name('konfirmasi.simpan');
    Route::get('/konfirmasi/fetch', [DashboardMahasiswaController::class, 'fetch'])->name('konfirmasi.fetch');
    // Route::get('/dashboard-mahasiswa', function () {
    //     return view('layout.dashboard-mahasiswa');
    // })->name('dashboard.mahasiswa');
});
