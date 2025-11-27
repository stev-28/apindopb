<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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
