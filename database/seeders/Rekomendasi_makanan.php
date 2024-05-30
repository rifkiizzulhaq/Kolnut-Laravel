<?php

namespace Database\Seeders;

use App\Models\Rekomendasi_makanan as ModelsRekomendasi_makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rekomendasi_makanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRekomendasi_makanan::create([
            'judul' => 'Tahu Goreng',
            'harga' => '5000',
            'deskripsi' => 'ini tahu'
        ]);
    }
}
