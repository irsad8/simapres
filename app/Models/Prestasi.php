<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestasi extends Model
{
    /** @use HasFactory<\Database\Factories\PrestasiFactory> */
    use HasFactory;

    protected $table = 'Prestasi';

    protected $fillable = [
        'mahasiswa_id',
        'kategori',
        'pelaksanaan',
        'diatas_10PT',
        'nama_kegiatan',
        'jumlah_peserta',
        'capaian',
        'mulai_pelaksanaan',
        'selesai_pelaksanaan',
        'link_sertifikat',
        'link_penyelenggara',
        'foto_penyerahan',
        'surat_tugas_mhs',
        'dosen_id',
        'surat_tugas_dosen',
        'verifikasi',
    ];

    public function mahasiswa() : BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class,'mahasiswa_id','user_id');
    }

    public function dosen() : BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'dosen_id','user_id');
    }
}
