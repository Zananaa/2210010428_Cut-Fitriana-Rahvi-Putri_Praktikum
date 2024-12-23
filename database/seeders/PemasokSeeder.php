<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use App\Models\Pemasok as ModelsPemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Pemasok::insert([
            [
                'nama_pemasok' => 'CV Alading',
                'nama_kontak' => 'Mas Elon',
                'nomor_hp' => '08000000',
                'alamat' => 'Martapura',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'nama_pemasok' => 'CV Benalu',
                'nama_kontak' => 'Mbak Piya',
                'nomor_hp' => '08000000',
                'alamat' => 'Banjarmasin',
                'created_at' => $now, 'updated_at' => $now
            ],
        ]);
    }
}
