<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        // Periksa apakah data penting ada dan tidak kosong
        if (empty($row['no_ukg']) || empty($row['nama_peserta']) || empty($row['nik']) || empty($row['nim'])) {
            // Log jika baris kosong atau tidak valid
            // Log::info('Baris data kosong atau tidak valid, dilewati: ', $row);
            return null; // Mengembalikan null berarti baris ini tidak akan diproses atau disimpan
        }

        // Membuat password berdasarkan NIM dan tahun lahir
        $password = $row['nim'] . substr($row['tanggal_lahir'], 0, 4); // Kombinasi NIM dan tahun lahir sebagai password
        $existingMahasiswa = Mahasiswa::where('noUkg', $row['no_ukg'])->first();
        // $mahasiswa = Mahasiswa::where('noUkg', $row['no_ukg'])->first();
        try {
            if ($existingMahasiswa) {
                $existingMahasiswa->update([
                    'namaPeserta' => $row['nama_peserta'],
                    'nik' => $row['nik'],
                    'tempatLahir' => isset($row['tempat_lahir']) && $row['tempat_lahir'] ? $row['tempat_lahir'] : null,
                    'tanggalLahir' => isset($row['tanggal_lahir']) && $row['tanggal_lahir'] ? Carbon::parse($row['tanggal_lahir'])->format('Y-m-d') : null,
                    'urlFoto' => isset($row['url_foto']) && $row['url_foto'] ? $row['url_foto'] : null,

                ]);

                Log::info("Data Mahasiswa dengan no_ukg {$row['no_ukg']} berhasil diupdate.");
                return $existingMahasiswa;
            } else {
                return new Mahasiswa([
                    'noUkg' => $row['no_ukg'], // Sesuaikan dengan kolom di file Excel atau CSV
                    'namaPeserta' => $row['nama_peserta'],
                    'nik' => $row['nik'],
                    'nim' => $row['nim'],
                    'nomorSertifikatPendidik' => $row['nomor_sertifikat_pendidik'], //Nomor Sertifika Pendidik
                    'tempatLahir' => isset($row['tempat_lahir']) && $row['tempat_lahir'] ? $row['tempat_lahir'] : null,
                    'tanggalLahir' => isset($row['tanggal_lahir']) && $row['tanggal_lahir'] ? Carbon::parse($row['tanggal_lahir'])->format('Y-m-d') : null,
                    'urlFoto' => isset($row['url_foto']) && $row['url_foto'] ? $row['url_foto'] : null,
                    'qrCode' => isset($row['qr_code']) && $row['qr_code'] ? $row['qr_code'] : null,
                    'linkPreviewSertifikat' => isset($row['link_preview_sertifikat']) && $row['link_preview_sertifikat'] ? $row['link_preview_sertifikat'] : '#',
                    'tanggalSertifikat' => isset($row['tanggal_sk_kelulusan']) && $row['tanggal_sk_kelulusan'] ? Carbon::parse($row['tanggal_sk_kelulusan'])->format('Y-m-d') : null,
                    'nikPddikti' => isset($row['nik_pddikti']) && $row['nik_pddikti'] ? $row['nik_pddikti'] : null,
                    'nimPddikti' => isset($row['nim_pddikti']) && $row['nim_pddikti'] ? $row['nim_pddikti'] : null,
                    'namaBidangStudi' => isset($row['nama_bidang_studi']) && $row['nama_bidang_studi'] ? $row['nama_bidang_studi'] : null,
                    'kodeBidangStudi' => isset($row['kode_bidang_studi']) && $row['kode_bidang_studi'] ? $row['kode_bidang_studi'] : null,
                    // 'password' => bcrypt($password), // Pastikan menggunakan bcrypt untuk menyimpan password dengan aman
                    'password' => Hash::make($password),
                    'piloting' => $row['piloting'],
                    'barcode' => isset($row['barcode']) && $row['barcode'] ? $row['barcode'] : null,

                ]);
                Log::info("Data Mahasiswa dengan no_ukg {$row['no_ukg']} berhasil ditambahakan.");
            }
        } catch (\Exception $e) {
            Log::error("Terjadi kesalahan saat melakukan update atau insert data mahasiswa: " . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan saat melakukan update atau insert data mahasiswa'], 500);
        }
    }
}
