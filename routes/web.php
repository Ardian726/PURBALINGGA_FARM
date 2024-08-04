<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(DaftarController::class)->group(function () {
    Route::get('/daftar', 'index');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::get('/daftar-create', 'create');
    Route::post('/daftar-create', 'store')->name('daftar.perform');
    Route::get('/daftar-edit/{id}', 'edit')->name('daftar.edit');
    Route::put('/daftar-edit/{id}', 'update')->name('daftar.update');
    Route::delete('daftar/{id}', 'destroy')->name('daftar.delete');
});

require __DIR__ . '/auth.php';
