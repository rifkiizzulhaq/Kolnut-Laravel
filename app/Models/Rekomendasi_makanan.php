<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi_makanan extends Model
{
    use HasFactory;
    protected $table = 'rekomendasi_makanans';
    protected $fillable = [
        'judul',
        'harga',
        'deskripsi'
    ];
}