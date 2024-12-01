<?php

use App\Http\Controllers\Auth\LoginMahasiswaController;
use App\Http\Middleware\AuthenticateMahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.landing');
});
Route::get('/login-mahasiswa', function () {
    return view('layout.landing');
});

// Route::get('/login-mahasiswa', [LoginMahasiswaController::class, 'showLoginForm'])->name('mahasiswa.login.form');
Route::post('/login-mahasiswa', [LoginMahasiswaController::class, 'login'])->name('mahasiswa.login');
Route::get('/logout-mahasiswa', [LoginMahasiswaController::class, 'logout'])->name('mahasiswa.logout');


Route::middleware([AuthenticateMahasiswa::class])->group(function () {
    Route::get('/dashboard-mahasiswa', function () {
        return view('welcome');
    })->name('dashboard.mahasiswa');
});
