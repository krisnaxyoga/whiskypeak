<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\Admin\SuperadminController;
use App\Http\Controllers\User\UserController;


Route::get('/undangan', [App\Http\Controllers\User\Undangan\UndanganController::class, 'index'])->name('undangan.index');
//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index'])->name('dashboard.admin');
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/user', [UserController::class, 'index'])->name('dashboard.user');

});
