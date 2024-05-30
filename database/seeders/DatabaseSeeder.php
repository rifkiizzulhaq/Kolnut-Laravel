<?php

namespace Database\Seeders;

use App\Models\Rekomendasi;
use App\Models\Rekomendasi_makanan;
use Illuminate\Database\Seeder;
use Database\Seeders\Rekomendasi_makanan as SeedersRekomendasi_makanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolePermission::class);
        $this->call(SeedersRekomendasi_makanan::class);
    }
}
