<?php

namespace App\Http\Controllers;

use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        // Validasi tipe file
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv|max:10240', // Maksimal ukuran 10MB
        ], [
            'file.required' => 'NIM wajib diisi.',
            'file.mimes' => 'File harus berupa excel, csv.',
            'file.max' => 'File harus berupa maksimal 10 MB',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Tentukan pembaca sesuai dengan ekstensi file
            $extension = $file->getClientOriginalExtension();

            if ($extension === 'xlsx' || $extension === 'xls') {
                // Impor file Excel
                Excel::import(new MahasiswaImport, $file);
            } elseif ($extension === 'csv') {
                // Impor file CSV
                Excel::import(new MahasiswaImport, $file);
            } else {
                // Tampilkan pesan error jika tipe file tidak dikenali
                return back()->withErrors('Tipe file tidak valid. Pastikan file adalah Excel (.xlsx, .xls) atau CSV.');
            }

            session()->flash('message', 'Data berhasil diimpor!');
        }

        return redirect()->route('filament.resources.mahasiswas.index');
    }
}
