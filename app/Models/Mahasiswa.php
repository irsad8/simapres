<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    /** @use HasFactory<\Database\Factories\MahasiswaFactory> */
    use HasFactory;

    protected $table = 'Mahasiswa';

    protected $fillable = ['user_id', 'nim', 'jurusan_id', 'prestasi'];

    protected $with = ['account', 'jurusan', 'prestasi'];

    public function account(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }

    public function prestasi(): HasMany
    {
        return $this->hasMany(Prestasi::class, 'mahasiswa_id', 'user_id');
    }
}
