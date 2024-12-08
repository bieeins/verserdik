<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // if($row['no_ukg']){
        //     Log::info('Data Row: ', $row);
        // }
        // // Membuat password berdasarkan NIM dan tahun lahir
        // $password = substr($row['nim'], 0, 6) . substr($row['tanggal_lahir'], 0, 4); // Contoh kombinasi NIM dan tahun lahir
        // // Ambil 4 digit tahun dari tanggal lahir
        // // $tahunLahir = Carbon::parse($row['tanggal_lahir'])->format('Y');

        // // Gabungkan NIM dengan tahun lahir untuk membuat password
        // $password = bcrypt($password);

        // Periksa apakah data penting ada dan tidak kosong
        if (empty($row['no_ukg']) || empty($row['nama_peserta']) || empty($row['nik']) || empty($row['nim'])) {
            // Log jika baris kosong atau tidak valid
            // Log::info('Baris data kosong atau tidak valid, dilewati: ', $row);
            return null; // Mengembalikan null berarti baris ini tidak akan diproses atau disimpan
        }

        // Membuat password berdasarkan NIM dan tahun lahir
        $password = $row['nim'] . substr($row['tanggal_lahir'], 0, 4); // Kombinasi NIM dan tahun lahir sebagai password
        // dd($row['tanggal_sk_kelulusan']);
        return new Mahasiswa([
            'noUkg' => $row['no_ukg'], // Sesuaikan dengan kolom di file Excel atau CSV
            'namaPeserta' => $row['nama_peserta'],
            'nik' => $row['nik'],
            'nim' => $row['nim'],
            'nomorSertifikatPendidik' => $row['nomor_sertifikat_pendidik'],
            'tempatLahir' => isset($row['tempat_lahir']) && $row['tempat_lahir'] ? $row['tempat_lahir'] : null,
            'tanggalLahir' => isset($row['tanggal_lahir']) && $row['tanggal_lahir'] ? Carbon::parse($row['tanggal_lahir'])->format('Y-m-d') : null,
            'urlFoto' => isset($row['url_foto']) && $row['url_foto'] ? $row['url_foto'] : null,
            'qrCode' => isset($row['qr_code']) && $row['qr_code'] ? $row['qr_code'] : null,
            'linkPreviewSertifikat' => isset($row['link_preview_sertifikat']) && $row['link_preview_sertifikat'] ? $row['link_preview_sertifikat'] : '#',
            'tanggalSertifikat' => isset($row['tanggal_sk_kelulusan']) && $row['tanggal_sk_kelulusan'] ? Carbon::parse($row['tanggal_sk_kelulusan'])->format('Y-m-d') : null,
            'nikPddikti' => $row['nik_pddikti'],
            'nimPddikti' => $row['nim_pddikti'],
            'namaBidangStudi' => $row['nama_bidang_studi'],
            'kodeBidangStudi' => $row['kode_bidang_studi'],
            'password' => bcrypt($password), // Pastikan menggunakan bcrypt untuk menyimpan password dengan aman
            'piloting' => $row['piloting'],
            'barcode' => isset($row['barcode']) && $row['barcode'] ? $row['barcode'] : null,

        ]);
    }
}
