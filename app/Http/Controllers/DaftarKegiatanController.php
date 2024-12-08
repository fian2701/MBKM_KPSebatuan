<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarKegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
class DaftarKegiatanController extends Controller
{
    // Menampilkan form input kegiatan
    public function index()
    {
        return view('admin.daftar-kegiatan',[
            'daftar_kegiatans'=> DaftarKegiatan::all()
        ]);
    }

    // Menyimpan data kegiatan ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/gambar');
        } else {
            $imagePath = null;
        }

        // Menyimpan data ke database
        DaftarKegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect('/daftar_kegiatan')->with('success', 'Kegiatan berhasil ditambahkan!');
    }
    public function show(DaftarKegiatan $daftar_kegiatan){
    
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarKegiatan $daftar_kegiatan)
    {
        // $kegiatan = DaftarKegiatan::findOrFail($daftar_kegiatan);
        // dd($kegiatan); // Retrieve the kegiatan by ID
        return view('admin.edit-kegiatan',[
            'daftar_kegiatan'=> $daftar_kegiatan
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarKegiatan $daftar_kegiatan)
    {
        // dd($request);
        $ValidatedData=$request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // $kegiatan = DaftarKegiatan::findOrFail($daftar_kegiatan);
    
        // $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        // $kegiatan->tanggal = $request->tanggal;
        // $kegiatan->deskripsi = $request->deskripsi;
    
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images/kegiatan'), $fileName);
            $request->gambar = $fileName;
        }
    
        //$kegiatan->save();
        DaftarKegiatan::where('id', $daftar_kegiatan->id)->update($ValidatedData);
    
        return redirect('/daftar_kegiatan')->with('success', 'Daftar kegiatan berhasil diperbarui.');
    
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarKegiatan $daftar_kegiatan)
    {
        // Hapus file gambar jika ada
        if ($daftar_kegiatan->gambar) {
            Storage::delete('public/' . $daftar_kegiatan->gambar);
        }

        // Hapus data kegiatan
        $daftar_kegiatan->delete();

        return redirect()->route('daftar_kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');

    }
}

    /**
     * Display the specified resource.
     */
    // public function show(Daftar_kegiatan $daftar_kegiatan)
    // {
    //     //
    // }

