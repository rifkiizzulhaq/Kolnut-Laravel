<?php

namespace App\Http\Controllers;

use App\Models\TipsMakanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function index()
    {
        return view('landingPage.section');
    }

    public function tipsMakanan(){
        $tipsMakanan = TipsMakanan::paginate(3); // Menambahkan pagination dengan 10 item per halaman
        return view('admin.tipsMakanan', compact('tipsMakanan'));
    }

    public function tipsMakananCreate(){
        return view('admin.tipsMakananCreate');
    }

    public function tipsMakananStore(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
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

        TipsMakanan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path.$namaGambar,
            // 'user_id' => auth()->id(), // Asumsi user sudah login dan id tersedia
        ]);

        return redirect()->route('tips-makanan');
    }

    public function tipsMakananEdit($id){
        $tipsMakanan = TipsMakanan::findOrFail($id);
        return view('admin.tipsMakananEdit', compact('tipsMakanan'));
    }

    public function tipsMakananUpdate(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg|max:5048',
        ],
        [
            'judul.required' => 'Judul tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'gambar.image' => 'File yang diupload harus berupa gambar (jpeg,png,jpg)',
            'gambar.mimes' => 'File yang diupload harus berupa gambar (jpeg,png,jpg)',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        $tipsMakanan = TipsMakanan::findOrFail($id);

        $path = 'upload/gambar/'; // Inisialisasi variabel path

        if($request->has('gambar')){
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $namaGambar = time().'.'.$extension;
            $gambar->move($path, $namaGambar);

            if(File::exists($tipsMakanan->gambar)){
                File::delete($tipsMakanan->gambar);
            }
        }

        $tipsMakanan->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path.$namaGambar,
            // 'user_id' => auth()->id(), // Asumsi user sudah login dan id tersedia
        ]);

        return redirect()->route('tips-makanan')->with('success', 'Data berhasil diperbarui');
    }

    public function tipsMakananDelete($id){
        $tipsMakanan = TipsMakanan::findOrFail($id);
        if(File::exists($tipsMakanan->gambar)){
            File::delete($tipsMakanan->gambar);
        }
        $tipsMakanan->delete();
        return redirect()->route('tips-makanan')->with('success', 'Data berhasil dihapus');
    }
}
