<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

// Rute Halaman Publik
Route::get('/', [FilmController::class, 'index'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/tv', [FilmController::class, 'tvSeries'])->name('tv');
Route::get('/people', [FilmController::class, 'people'])->name('people');
Route::get('/details/{judul}', [FilmController::class, 'details'])->name('details');
Route::get('/people-details/{name}', [FilmController::class, 'peopleDetails'])->name('people.details');

// Rute untuk Admin Panel
Route::prefix('admin')->group(function () {
    // Rute untuk Login & Logout
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Rute yang Dilindungi (Harus Login)
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/{table}/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/{table}', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/{table}/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/{table}/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/{table}/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    });
});