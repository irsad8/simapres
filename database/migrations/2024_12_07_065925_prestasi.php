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
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->nullable()->references('user_id')->on('mahasiswa')->onDelete('set null');
            $table->enum('kategori', ['provinsi', 'nasional', 'internasional']);
            $table->enum('pelaksanaan', ['daring', 'luring']);
            $table->boolean('diatas_10PT');
            $table->string('nama_kegiatan');
            $table->integer('jumlah_peserta')->nullable();
            $table->string('capaian');
            $table->date('mulai_pelaksanaan');
            $table->date('selesai_pelaksanaan');
            $table->string('link_sertifikat');
            $table->string('link_penyelenggara');
            $table->string('foto_penyerahan');
            $table->string('surat_tugas_mhs');
            $table->foreignId('dosen_id')->nullable()->references('user_id')->on('dosen')->onDelete('set null');
            $table->string('surat_tugas_dosen')->nullable();
            $table->boolean('verifikasi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi');
    }
};
