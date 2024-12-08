<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("admin/berita/create",[
            'beritas'=>Berita::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input yang diterima dari form
        //dd($request);
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika gambar diunggah, simpan gambar tersebut
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            // Simpan gambar ke folder 'public/berita_images' di storage
            $path = $gambar->store('public/berita_images');
        }

        // Simpan data berita ke dalam database
        berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal_terbit' => $request->tanggal_terbit,
            'gambar' => isset($path) ? $path : null, // Menyimpan path gambar jika ada
        ]);

        // Redirect kembali ke halaman create dengan pesan sukses
        return redirect('/berita')->with('success', 'Berita berhasil dibuat!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        // $berita = Berita::findOrFail($berita); 
        // $berita = Berita::find('id', $berita->id);
        return view('admin.berita.edit-berita', [
            'berita'=> $beritum
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        $ValidatedData=$request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        //$berita = Berita::findOrFail($berita);
    
        // $berita->judul = $request->judul;
        // $berita->konten = $request->konten;
        // $berita->tanggal_terbit = $request->tanggal_terbit;
    
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $fileName);
            $beritum->gambar = $fileName;
        }
    
        //$berita->save();
            berita::where('id', $beritum->id)->update($ValidatedData);
    
        return redirect('/berita')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        //dd($beritum);
        if ($beritum->gambar) {
            Storage::delete('public/' . $beritum->gambar);
        }
    
        // Hapus data berita
        $beritum->delete();
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
