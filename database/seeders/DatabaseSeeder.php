<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $prodi = [
            'D3 keperawatan',
            'D4 fisioterapi',
            'S1 keperawatan',
            'S1 kebidanan',
            'S1 Administrasi Rumah Sakit',
            'S1 Kewirausahan',
            'S1 Manajemen Retail',
            'S1 Sistem dan Teknologi Informasi',
            'Profesi Ners',
            'Profesi Bidan'
        ];

        User::factory()->create([
            'nama' => 'admin Simapres',
            'email' => 'simapres@aiska-university.ac.id',
            'password' => 'aiskaSKAjaya',
            'role'=> 'admin',
        ]);

        foreach ($prodi as $value) {
            Jurusan::factory()->create([
                'nama_jurusan' => $value
            ]);
        };
    }
}
