<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route utama menampilkan landing page
Route::get('/', function () {
    return view('landing');
});

// Route untuk form pendaftaran (POST) menggunakan RegistrationController
Route::post('/pendaftaran', [RegistrationController::class, 'store'])->name('pendaftaran.store');

// Route Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Admin - Data Pendaftaran (Protected)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/pendaftaran', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/pendaftaran/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/pendaftaran/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
