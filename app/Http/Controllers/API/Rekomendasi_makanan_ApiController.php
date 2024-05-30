<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TipsMakanan;
use Illuminate\Http\Request;

class Rekomendasi_makanan_ApiController extends Controller
{
    public function getTipsMakanan()
    {
        // Mengambil data TipsMakanan dengan pagination 3 item per halaman
        $tipsMakanan = TipsMakanan::paginate(3);
        return response()->json($tipsMakanan, 200);
    }

    public function getTipsMakananById($id)
    {
        // Mengambil satu data TipsMakanan berdasarkan id
        $tipsMakanan = TipsMakanan::find($id);

        if (!$tipsMakanan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($tipsMakanan, 200);
    }
}
