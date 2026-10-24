<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
   
    public function index()
    {
        $kendaraans = Kendaraan::all();

        return view('kendaraan.index', compact('kendaraans'));
    }

    
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_polisi' => 'required|string|unique:kendaraans,nomor_polisi',
            'merek' => 'required|string',
            'tipe' => 'required|string',
            'kategori' => 'required|string',
            'tahun' => 'required|integer|min:1900|max:2026',
            'warna' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        Kendaraan::create($validated);

        return
         redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validated = $request->validate([
            'nomor_polisi' => 'required|string|unique:kendaraans,nomor_polisi,' . $kendaraan->id,
            'merek' => 'required|string',
            'tipe' => 'required|string',
            'kategori' => 'required|string',
            'tahun' => 'required|integer|min:1900|max:2026',
            'warna' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $kendaraan->update($validated);

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Data kendaraan berhasil dihapus.');
    }
}
