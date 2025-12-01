<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Menampilkan daftar semua pendaftaran.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->get();
        
        return view('admin.index', compact('registrations'));
    }

    /**
     * Menampilkan detail pendaftaran.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $registration = Registration::findOrFail($id);
        
        return view('admin.show', compact('registration'));
    }

    /**
     * Menghapus data pendaftaran.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        
        // Hapus file lampiran jika ada
        if ($registration->surat_mandat && Storage::disk('public')->exists($registration->surat_mandat)) {
            Storage::disk('public')->delete($registration->surat_mandat);
        }
        
        // Hapus data dari database
        $registration->delete();
        
        return redirect()->route('admin.index')
            ->with('success', 'Data pendaftaran berhasil dihapus!');
    }
}

