<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{

    public function index()
    {

        $mahasiswa = Auth::guard('mahasiswa')->user();

        return view('layout.dashboard', compact('mahasiswa'));
    }

    public function simpanKonfirmasi(Request $request)
    {
        // Validasi input dengan pesan kustom dalam bahasa Indonesia
        $request->validate([
            'nim' => 'required|max:20',
            'keterangan' => 'required',
        ], [
            'nim.required' => 'NIM wajib diisi.',
            'nim.max' => 'NIM tidak boleh lebih dari 20 karakter.',
            'keterangan.required' => 'Keterangan wajib diisi.',
        ]);

        try {
            // Simpan atau perbarui data di tabel
            $konfirmasi = Konfirmasi::updateOrCreate(
                ['nim' => $request->nim], // Kriteria untuk update
                ['keterangan' => $request->keterangan] // Data untuk disimpan
            );

            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan.',
                'data' => $konfirmasi,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function fetch(Request $request)
    {
        $konfirmasi = Konfirmasi::where('nim', $request->nim)->first();

        if ($konfirmasi) {
            return response()->json([
                'success' => true,
                'data' => $konfirmasi,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan',
        ]);
    }
}
