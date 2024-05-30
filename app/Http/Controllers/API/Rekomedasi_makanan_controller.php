<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rekomendasi_makanan;
use Illuminate\Http\Request;

class Rekomedasi_makanan_controller extends Controller
{
    public function index(){

        $makanan = Rekomendasi_makanan::all();

        return response()->json([
            'Data'=>true,
            'Message'=>$makanan
        ]);

    }
}
