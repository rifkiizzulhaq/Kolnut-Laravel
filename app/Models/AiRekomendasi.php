<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiRekomendasi extends Model
{
    use HasFactory;
    protected $table = 'ai_rekomendasis';
    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'harga',
        'gambar'
    ];
}
