<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Dosen;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DosenImport implements ToModel, WithHeadingRow, WithStartRow, SkipsOnFailure
{
    protected $failures = [];

    public function startRow(): int
    {
        return 6;
    }

    public function model(array $row)
    {
        try {
            $user = User::create([
                'nama' => $row[1],
                'email' => $row[2],
                'password' => bcrypt($row[3]),
                'role' => 'dosen',
            ]);

            return new Dosen([
                'user_id' => $user->id,
                'nidn' => $row[4],
            ]);
        } catch (\Exception $e) {
            // Menyimpan informasi tentang baris yang gagal
            $this->failures[] = [
                'row' => json_encode($row)
            ];
            // Log error jika diperlukan
            Log::error('Import failed for row: ' . json_encode($row) . ' with error: ' . $e->getMessage());
            return null; // Mengembalikan null untuk menghindari penyimpanan data yang tidak valid
        }
    }

    public function onFailure(Failure ...$failures)
    {
        foreach ($failures as $failure) {
            // Menyimpan informasi tentang kegagalan
            $this->failures[] = [
                'row' => $failure->row(),
                'errors' => $failure->errors(),
            ];
        }
    }

    public function getFailures()
    {
        return $this->failures;
    }
}
