<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KajurController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'doLogin'])->name('doLogin');
});

Route::middleware(['auth', 'checkrole:1,2,3,4,5'])->group(function () {
    Route::get('redirect', [RedirectController::class, 'check'])->name('redirect');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'checkrole:1'])->group(function () {
    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('judul', [JudulController::class, 'index'])->name('judul.index');
    Route::post('judul', [JudulController::class, 'addJudul'])->name('judul.add');
    Route::get('mahasiswa/data/{mahasiswa} ', [MahasiswaController::class, 'showData'])->name('mahasiswa.data');
    Route::put('mahasiswa/data/{mahasiswa} ', [MahasiswaController::class, 'updateData'])->name('mahasiswa.updateData');
});

Route::middleware(['auth','checkrole:2'])->group(function () {
    Route::get('dosen', [DosenController::class, 'index'])->name('dosen.dashboard');
});

Route::middleware(['auth', 'checkrole:3'])->group(function () {
    Route::get('kajur', [KajurController::class, 'index'])->name('kajur.dashboard');
    Route::get('kajur/judul', [KajurController::class, 'judul'])->name('kajur.judul');
    Route::get('kajur/aprove/{judul}', [KajurController::class, 'aprove'])->name('kajur.aprove');
    Route::post('judul/aproved/{judul}', [JudulController::class, 'aproveJudul'])->name('judul.aprove');
});

Route::middleware(['auth', 'checkrole:5'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/create', [UserController::class, 'store'])->name('user.addUser');
});