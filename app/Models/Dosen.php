<?php

namespace App\Models;

use App\Models\User;
use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    /** @use HasFactory<\Database\Factories\DosenFactory> */
    use HasFactory;

    protected $table = 'Dosen';

    protected $fillable = ['nama', 'nidn'];

    public function account() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function bimbingan() : HasMany
    {
        return $this->hasMany(Prestasi::class, 'dosen_id', 'user_id');
    }
}
