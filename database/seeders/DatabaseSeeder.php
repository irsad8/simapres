<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
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
            'D3 Keperawatan',
            'D4 Fisioterapi',
            'S1 Keperawatan',
            'S1 Kebidanan',
            'S1 Administrasi Rumah Sakit',
            'S1 Kewirausahan',
            'S1 Manajemen Retail',
            'S1 Sistem Dan Teknologi Informasi',
            'Profesi Ners',
            'Profesi Bidan'
        ];

        User::factory()->create([
            'nama' => 'admin Simapres',
            'email' => 'simapres@aiska-university.ac.id',
            'password' => 'aiskaSKAjaya',
            'role' => 'admin',
        ]);

        foreach ($prodi as $value) {
            Jurusan::factory()->create([
                'nama_jurusan' => $value
            ]);
        };

        $mahasiswa = User::factory()->create([
            'nama' => 'mahasiswa 1',
            'email' => 'mahasiswa@aiska-university.ac.id',
            'password' => 'aiskaSKAjaya',
            'role' => 'mahasiswa',
        ]);

        Mahasiswa::factory()->create([
            'user_id' => $mahasiswa,
        ]);

        $dosen = User::factory()->create([
            'nama' => 'dosen 1',
            'email' => 'dosen@aiska-university.ac.id',
            'password' => 'aiskaSKAjaya',
            'role' => 'dosen',
        ]);

        Dosen::factory()->create([
            'user_id' => $dosen,
        ]);

        // Mahasiswa::factory(100)->create(['user_id' => User::factory()]);
    }
}
