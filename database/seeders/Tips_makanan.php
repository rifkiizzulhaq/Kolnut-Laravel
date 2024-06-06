<?php

namespace Database\Seeders;

// use App\Models\Rekomendasi_makanan;
use App\Models\TipsMakanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tips_makanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $namaGambar = 'tempe.jpg';
        $path = '/gambar/' . $namaGambar; // assuming default image
        TipsMakanan::create([
            'judul' => 'Makanan Sehat',
            'gambar' => $path,
            'deskripsi' => 'ini tempe'
        ]);
    }
}
