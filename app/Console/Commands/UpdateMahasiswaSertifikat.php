<?php

namespace App\Console\Commands;

use App\Models\Mahasiswa;
use Illuminate\Console\Command;

class UpdateMahasiswaSertifikat extends Command
{
    protected $signature = 'update:mahasiswa-sertifikat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menambahkan dua digit nol di depan nomor sertifikat pada mahasiswa';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambil semua data mahasiswa
        $mahasiswas = Mahasiswa::all();

        foreach ($mahasiswas as $mahasiswa) {
            // Pastikan nomorSertifikatPendidik ada dan valid
            if ($mahasiswa->nomorSertifikatPendidik) {
                // Ambil nomor sertifikat
                $nomorSertifikat = $mahasiswa->nomorSertifikatPendidik;

                // Tambahkan nol di depan (pastikan ada dua nol di depan)
                $newNomorSertifikat = '00' . $nomorSertifikat;

                // Update nomor sertifikat
                $mahasiswa->update([
                    'nomorSertifikatPendidik' => $newNomorSertifikat,
                ]);

                // Tampilkan informasi bahwa data sudah diupdate
                $this->info("Nomor Sertifikat updated for NIM: {$mahasiswa->nim}");
            } else {
                $this->warn("Skipping NIM: {$mahasiswa->nim} due to missing nomorSertifikatPendidik.");
            }
        }

        // Informasikan bahwa proses telah selesai
        $this->info("All nomorSertifikatPendidik updated successfully!");

        return 0;
    }
}
