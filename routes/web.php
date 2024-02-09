<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KajurController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DosenController;

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
    Route::get('bimbingan/room/{room}', [MahasiswaController::class, 'room'])->name('bimbingan.room');
    Route::get('mahasiswa/bimbingan', [BimbinganController::class, 'index'])->name('mahasiswa.bimbingan');
    Route::post('room/draft/{room}', [RoomController::class, 'uploadDraft'])->name('room.upload');
    Route::get('mahasiswa/sempro', [MahasiswaController::class, 'sempro'])->name('seminar.proposal');
    Route::get('mahasiswa/hasil', [MahasiswaController::class, 'hasil'])->name('seminar.hasil');
});

Route::middleware(['auth','checkrole:2'])->group(function () {
    Route::get('dosen', [DosenController::class, 'index'])->name('dosen.dashboard');
    Route::get('dosen/bimbingan', [DosenController::class, 'bimbingan'])->name('dosen.bimbingan');
    Route::get('dosen/room/{room}', [RoomController::class, 'dosen'])->name('dosen.room');
    Route::get('room/draft/{room}', [RoomController::class, 'download'])->name('draft.download');
    Route::put('room/revisi/{room}', [RoomController::class, 'revisi'])->name('revisi');
    Route::put('room/aproved/{room}', [RoomController::class, 'status'])->name('room.aprove');
    Route::get('dosen/data/{dosen}', [DosenController::class, 'data'])->name('dosen.data');
    Route::put('dosen/data/update/{dosen}', [DosenController::class, 'update'])->name('dosen.update');
});

Route::middleware(['auth', 'checkrole:3'])->group(function () {
    Route::get('kajur', [KajurController::class, 'index'])->name('kajur.dashboard');
    Route::get('kajur/judul', [KajurController::class, 'judul'])->name('kajur.judul');
    Route::get('kajur/aprove/{judul}', [KajurController::class, 'aprove'])->name('kajur.aprove');
    Route::post('judul/aproved/{judul}', [JudulController::class, 'aproveJudul'])->name('judul.aprove');
    Route::get('judul/tolak/{judul}', [JudulController::class, 'tolakJudul'])->name('judul.tolak');
    Route::get('kajur/data/{kajur}', [KajurController::class, 'data'])->name('kajur.data');
    Route::put('kajur/data/update/{kajur}', [KajurController::class, 'update'])->name('kajur.update');
    Route::get('kajur/distribusi', [KajurController::class, 'distribusi'])->name('kajur.distribusi');
    Route::get('kajur/distribusi2', [KajurController::class, 'distribusi2'])->name('kajur.distribusi2');
});

Route::middleware(['auth', 'checkrole:5'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/create', [UserController::class, 'store'])->name('user.addUser');
});