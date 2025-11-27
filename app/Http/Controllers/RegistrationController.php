<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
    /**
     * Simpan data pendaftaran baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input - semua kolom wajib diisi
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'telepon' => 'required|string|max:20',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'kabupaten.required' => 'Kabupaten wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
        ]);

        // Simpan data ke tabel registrations
        Registration::create($validated);

        // Redirect ke halaman utama dengan pesan flash session success
        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }
}

