<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/', [Controllers\AuthController::class, 'login']);
Route::post('/logout', [Controllers\AuthController::class, 'logout']);
Route::post('ubah_password', [Controllers\AuthController::class, 'ubah_password']);
Route::get('test', [Controllers\PrestasiController::class, 'index']);

Route::post('export', function (Request $request) {
    return response()->json($request->data);
});
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('dosen', [Controllers\DosenController::class, 'index']);
    Route::get('mahasiswa', [Controllers\MahasiswaController::class, 'index']);
    Route::get('prestasi', [Controllers\PrestasiController::class, 'index']);
    Route::post('mahasiswa', [Controllers\MahasiswaController::class, 'store']);
    Route::post('dosen', [Controllers\DosenController::class, 'store']);
    Route::post('prestasi', [Controllers\PrestasiController::class, 'store']);
});
