<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TipsMakanan;
use Illuminate\Http\Request;

class TipsMakananApiController extends Controller
{
    public function Riwayat() {
        $riwayat = TipsMakanan::all();
        return response()->json([
            'success'=>true,
            'data' => $riwayat
        ]);
    }
}
