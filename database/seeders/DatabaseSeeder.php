<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RuangSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(PemasokSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(BarangMasukSeeder::class);
    }
}
