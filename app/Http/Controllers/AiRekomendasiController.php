<?php

namespace App\Http\Controllers;

use App\Models\AiRekomendasi;
use Illuminate\Http\Request;

class AiRekomendasiController extends Controller
{
    public function tipsMakananStore(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'kategori.required' => 'Deskripsi tidak boleh kosong',
            'harga.required' => 'Deskripsi tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'gambar.image' => 'File yang diupload harus berupa gambar (jpeg,png,jpg)',
            'gambar.mimes' => 'File yang diupload harus berupa gambar (jpeg,png,jpg)',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        $path = 'upload/gambar/'; // Inisialisasi variabel path

        if($request->has('gambar')){
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $namaGambar = time().'.'.$extension;
            $gambar->move($path, $namaGambar);
        }

        AiRekomendasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => $path.$namaGambar,
        ]);
    }
}
