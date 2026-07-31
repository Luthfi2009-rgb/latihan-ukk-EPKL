<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nis' => '123456789',
            'nama' => 'kupiww',
            'kelas' => 'XIi RPL 2',
            'tanggal_mulai_pkl' => '2026-06-01',
            'tanggal_selesai_pkl' => '2026-09-30',
            'perusahaan_id' => 1,
        ]);
    }
}
