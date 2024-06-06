<?php

namespace Database\Seeders;

use App\Models\AiRekomendasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AiRekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gambarKategori = [
            [
                'gambar' => '/gambar/salad.jpg',
                'kategori' => 'tidak berminyak',
            ],
            [
                'gambar' => '/gambar/pizza.jpg',
                'kategori' => 'berminyak',
            ],
        ];

        foreach ($gambarKategori as $kategori) {
            AiRekomendasi::create([
                'judul' => $kategori['kategori'] == 'tidak berminyak' ? 'Salad' : 'Pizza',
                'deskripsi' => $kategori['kategori'] == 'tidak berminyak' ? 'Salad makanan sehat' : 'Pizza enak',
                'harga' => $kategori['kategori'] == 'tidak berminyak' ? '10000' : '15000',
                'gambar' => $kategori['gambar'],
                'kategori' => $kategori['kategori'],
            ]);
        }
    }
}
