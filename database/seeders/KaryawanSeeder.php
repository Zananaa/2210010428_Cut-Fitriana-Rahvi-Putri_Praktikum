<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
            $now = date('Y-m-d H:i:s');
            Karyawan::insert([
        [
            'nama_karyawan' => 'Palui',
            'nomor_hp' => '0811',
            'alamat' => 'Martapura',
            'created_at' => $now, 'updated_at' => $now
        ],
        [
            'nama_karyawan' => 'Garbus',
            'nomor_hp' => '0812',
            'alamat' => 'Rantau',
            'created_at' => $now, 'updated_at' => $now
        ],
    ]);

    }
}
