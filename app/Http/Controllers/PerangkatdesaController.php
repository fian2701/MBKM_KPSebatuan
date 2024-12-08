<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Perangkatdesa;
use App\Http\Requests\StorePerangkatdesaRequest;
use App\Http\Requests\UpdatePerangkatdesaRequest;
use Illuminate\Support\Facades\Storage;


class PerangkatdesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perangkatdesas = Perangkatdesa::all();
        return view('admin.StrukturPengurus', compact('perangkatdesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.StrukturPengurus');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('StrukturPengurus', 'public');
        }
        Perangkatdesa::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $path,
        ]);
        return redirect('/perangkatdesa')->with('success', 'Pengurus berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Perangkatdesa $perangkatdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perangkatdesa $perangkatdesa)
    {
        return view('admin.edit-pengurus', [
            'perangkatdesa' => $perangkatdesa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perangkatdesa $perangkatdesa)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perangkatdesa $perangkatdesa)
    {
        // Hapus file gambar jika ada
        // dd ($perangkatdesa);
        if ($perangkatdesa->foto) {
            Storage::delete('public/' . $perangkatdesa->foto);
        }

        // Hapus data pengurus
        $perangkatdesa->delete();

        return redirect()->route('perangkatdesa.index')->with('success', 'Data pengurus berhasil dihapus.');
    }
}
