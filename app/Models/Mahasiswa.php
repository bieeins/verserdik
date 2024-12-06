<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    protected $table = 'mahasiswa';

    // Kolom yang dapat diisi
    protected $fillable = [
        'noUkg',
        'namaPeserta',
        'nik',
        'nim',
        'nomorSertifikatPendidik',
        'tempatLahir',
        'tanggalLahir',
        'urlFoto',
        'qrCode',
        'linkPreviewSertifikat',
        'nikPddikti',
        'nimPddikti',
        'namaBidangStudi',
        'kodeBidangStudi',
        'password',
    ];

    // Kolom yang disembunyikan
    protected $hidden = [
        'password',
    ];

    public function konfirmasis()
{
    return $this->hasMany(Konfirmasi::class, 'nim', 'nim');
}

}
