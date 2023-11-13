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
    // themess
    Route::get('/superadmin/themes', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'index'])->name('dashboard.themes.admin');
    Route::get('/superadmin/create/themes', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'create'])->name('dashboard.admin.create.themes');
    Route::post('/superadmin/store/themes', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'store'])->name('dashboard.admin.store.themes');
    Route::get('/superadmin/edit/themes/{id}', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'edit'])->name('dashboard.admin.edit.themes');
    Route::put('/superadmin/update/themes/{id}', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'update'])->name('dashboard.admin.update.themes');
    Route::get('/superadmin/show/themes/{id}', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'show'])->name('dashboard.admin.show.themes');
    Route::delete('/superadmin/destroy/themes/{id}', [App\Http\Controllers\Admin\Themes\ThemesController::class, 'destroy'])->name('dashboard.admin.destroy.themes');

    // kata kata
    Route::resource('/sepatahkata', App\Http\Controllers\Admin\Themes\SepatahKataController::class);

     // Paket undangan
     Route::resource('/pacage', App\Http\Controllers\Admin\Pacage\PacageController::class);

});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/user', [UserController::class, 'index'])->name('dashboard.user');

});
