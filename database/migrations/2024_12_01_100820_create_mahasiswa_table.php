<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('noUkg', 255);
            $table->string('namaPeserta', 255)->nullable();
            $table->string('password')->nullable();
            $table->string('nik', 255)->nullable();
            $table->string('nim', 255)->nullable();
            $table->string('nomorSertifikatPendidik', 255)->nullable();
            $table->string('tempatLahir', 255)->nullable();
            $table->string('tanggalLahir', 255)->nullable();
            $table->string('urlFoto', 500)->nullable();
            $table->string('qrCode', 255)->nullable();
            $table->string('linkPreviewSertifikat', 255)->nullable();
            $table->string('nikPddikti', 255)->nullable();
            $table->string('nimPddikti', 255)->nullable();
            $table->string('namaBidangStudi', 255)->nullable();
            $table->integer('kodeBidangStudi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
