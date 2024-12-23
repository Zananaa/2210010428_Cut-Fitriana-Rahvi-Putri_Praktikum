<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');
        Barang::insert([
            [
                'nama_barang' => 'Kursi Kantor',
                'merk' => 'Doodok',
                'tipe' => 'Kursi Kantor Air Spiring',
                'satuan' => 'Unit',
                'created_at' => $now, 'updated_at' => $now
            ],
            [
                'nama_barang' => 'Kipas Angin',
                'merk' => 'Semiwing',
                'tipe' => 'Kipas Angin Dinding',
                'satuan' => 'Unit',
                'created_at' => $now, 'updated_at' => $now
            ],
        ]);
    }
}
