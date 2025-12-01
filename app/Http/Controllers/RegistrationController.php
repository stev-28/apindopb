<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
            'surat_mandat' => 'required|file|mimes:pdf,jpeg,jpg|max:2048',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'kabupaten.required' => 'Kabupaten wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
            'surat_mandat.required' => 'Surat Mandat dan/atau Surat Keputusan Caretaker DPK wajib dilampirkan.',
            'surat_mandat.file' => 'File harus berupa file.',
            'surat_mandat.mimes' => 'File harus berupa PDF atau JPEG.',
            'surat_mandat.max' => 'Ukuran file maksimal 2 MB.',
        ]);

        // Handle file upload (wajib)
        $file = $request->file('surat_mandat');
        $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName());
        $filePath = $file->storeAs('surat_mandat', $fileName, 'public');
        $validated['surat_mandat'] = $filePath;

        // Simpan data ke tabel registrations
        Registration::create($validated);

        // Redirect ke halaman utama dengan pesan flash session success
        return redirect('/#pendaftaran')->with('success', 'Formulir Pendaftaran berhasil dikirim! Terima kasih atas partisipasi Anda.');
    }
}

