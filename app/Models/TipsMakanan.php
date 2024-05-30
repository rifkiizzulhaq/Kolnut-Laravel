<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipsMakanan extends Model
{
    use HasFactory;
    protected $table = 'tips_makanans';
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
