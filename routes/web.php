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
use App\Http\Controllers\passwordController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\sendMessageController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\SpreadsheetController;
use App\Http\Controllers\ZipperController;
use App\Http\Controllers\SeminarProposalController;
use App\Http\Controllers\MessageController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'doLogin'])->name('doLogin');
});

Route::middleware(['auth', 'checkrole:1,2,3,4,5'])->group(function () {
    Route::get('redirect', [RedirectController::class, 'check'])->name('redirect');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('user/settings/{user}', [UserController::class, 'settings'])->name('user.settings');
    Route::post('user/settings/{user}', [UserController::class, 'updateAvatar'])->name('update.avatar');
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
    Route::get('mahasiswa/sempro/{mahasiswa}', [MahasiswaController::class, 'sempro'])->name('seminar.proposal');
    Route::get('mahasiswa/hasil/{mahasiswa}', [MahasiswaController::class, 'hasil'])->name('seminar.hasil');
    Route::post('seminar/create', [PengajuanController::class, 'create'])->name('seminar.create');
    Route::put('mahasiswa/pesan/open/{message}', [MessageController::class, 'open'])->name('mahasiswa.pesan.open');
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
    Route::get('kajur/judul/search', [KajurController::class, 'search'])->name('judul.search');
    Route::get('kajur/judul/status', [KajurController::class, 'statusFilter'])->name('judul.statusFilter');
    Route::get('kajur/mahasiswa/profile/{mahasiswa}', [KajurController::class, 'profileMahasiswa'])->name('mahasiswa.profile');
    Route::post('kajur/send', [sendMessageController::class, 'send'])->name('send.message');
});

Route::middleware(['auth', 'checkrole:5'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/create', [UserController::class, 'store'])->name('user.addUser');
    Route::get('admin/mahasiswa', [AdminController::class, 'mahasiswa'])->name('admin.mahasiswa');
    Route::get('admin/mahasiswa/profile/{mahasiswa}', [AdminController::class, 'profileMahasiswa'])->name('admin.mahasiswa.profile');
    Route::get('admin/mahasiswa/search', [AdminController::class, 'search'])->name('admin.mahasiswa.search');
    Route::get('admin/mahasiswa/filter', [AdminController::class, 'filter'])->name('admin.mahasiswa.filter');
    Route::post('admin/angkatan', [AngkatanController::class, 'add'])->name('admin.angkatan.add');
    Route::get('admin/excel', [SpreadsheetController::class, 'create'])->name('admin.excel');
    Route::get('admin/appSettings', [AdminController::class, 'appSettings'])->name('admin.appSettings');
    Route::get('admin/dosen', [AdminController::class, 'dosen'])->name('admin.dosen');
    Route::post('admin/searchDosen', [AdminController::class, 'searchDosen'])->name('admin.searchDosen');
    Route::get('admin/detailDosen/{dosen}', [AdminController::class, 'detailDosen'])->name('admin.detailDosen');
    // Route::delete('admin/deleteDosen/{dosen}', [AdminController::class, 'deleteDosen'])->name('admin.deleteDosen');
    Route::get('admin/editDosen/{dosen}', [AdminController::class, 'editDosen'])->name('admin.editDosen');
    Route::put('admin/updateDosen/{dosen}', [AdminController::class, 'updateDosen'])->name('admin.updateDosen');
    // Route::delete('admin/deleteMahasiswa/{mahasiswa}', [AdminController::class, 'deleteMahasiswa'])->name('admin.deleteMahasiswa');
    Route::get('admin/editMahasiswa/{mahasiswa}', [AdminController::class, 'editMahasiswa'])->name('admin.editMahasiswa');
    Route::put('admin/updateMahasiswa/{mahasiswa}', [AdminController::class, 'updateMahasiswa'])->name('admin.updateMahasiswa');
    Route::get('admin/seminar', [AdminController::class, 'seminar'])->name('admin.seminar');
    Route::get('admin/seminar/berkas/{pengajuan}', [ZipperController::class, 'downloadZip'])->name('admin.berkas.download');
    Route::get('admin/seminar/search', [AdminController::class, 'searchSempro'])->name('admin.search.sempro');
    Route::get('admin/sempro/filter', [AdminController::class, 'filterSempro'])->name('admin.filter.sempro');
    Route::post('admin/sempro/save', [SeminarProposalController::class, 'save'])->name('admin.sempro.save');
    Route::post('admin/pesan', [MessageController::class, 'create'])->name('admin.pesan');
});

Route::get('/forgot-password', function() {
    return view('auth.forgotPassword');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function(Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function(string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function(Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function(User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::put('password', [passwordController::class, 'update'])->middleware('auth')->name('password.updated');