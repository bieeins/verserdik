<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SertifikatImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // if($row['no_ukg']){
        //     Log::info('Data Row: ', $row);
        // }

        // Periksa apakah data penting ada dan tidak kosong
        if (empty($row['no_ukg'])) {
            // Log jika baris kosong atau tidak valid
            // Log::info('Baris data kosong atau tidak valid, dilewati: ', $row);
            return null; // Mengembalikan null berarti baris ini tidak akan diproses atau disimpan
        }

        // Pastikan `no_ukg` tidak kosong
        if (!empty($row['no_ukg'])) {
            // Cek apakah mahasiswa dengan `no_ukg` sudah ada di database
            $mahasiswa = Mahasiswa::where('noUkg', $row['no_ukg'])->first();
            // Log::info("Data Mahasiswa dengan no_ukg {$row['no_ukg']} berhasil ditemukan.");

            if ($mahasiswa) {
                // Update
                $mahasiswa->update([
                    // 'qrCode' => $row['qr_code'] ?? $mahasiswa->qrCode,
                    // 'barcode' => $row['barcode'] ?? $mahasiswa->barcode,
                    // 'nomorHp' => $row['nomor_hp'] ?? $mahasiswa->nomorHp,
                    // 'linkFinalSertifikat' => $row['link_final_sertifikat'] ?? $mahasiswa->linkFinalSertifikat,
                    'qrCode' => !empty($row['qr_code']) ? $row['qr_code'] : ($row['qr_code'] ?? null),
                    'barcode' => !empty($row['barcode']) ? $row['barcode'] : ($row['barcode'] ?? null),
                    'nomorHp' => !empty($row['nomor_hp']) ? $row['nomor_hp'] : ($row['nomor_hp'] ?? null),
                    'linkFinalSertifikat' => !empty($row['link_final_sertifikat']) ? $row['link_final_sertifikat'] : ($row['link_final_sertifikat'] ?? null),
                ]);

                Log::info("Data Mahasiswa dengan no_ukg {$row['no_ukg']} berhasil diperbarui.");
            } else {
                Log::warning("Mahasiswa dengan no_ukg {$row['no_ukg']} tidak ditemukan.");
            }
        } else {
            Log::warning("Baris tanpa No UKG ditemukan. Baris dilewati.", $row);
        }
    }
}
