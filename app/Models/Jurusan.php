<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;

    protected $table = 'Jurusan';

    protected $fillable = ['nama_jurusan'];

    public function mahasiswa() : HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'jurusan_id', 'id');
    }
}
