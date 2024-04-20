<?php

namespace App\Http\Controllers;

use App\Models\suratJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuratJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratJalan = suratJalan::all();
        return view('suratJalan.index')->with('surat_jalans', $suratJalan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suratJalan = suratJalan::all();
        return view('suratJalan.create')->with('surat_jalans', $suratJalan);

        


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', suratJalan::class);
        $validateData = $request->validate([
            'nomorSurat' => 'required|unique:suratJalans',
            'tglKirim' => 'required',
            'namaBarang' => 'required',
            'jumlahBarang' => 'required'
        ]);

        $suratJalan = new suratJalan();
        $suratJalan->id=Str::uuid();
        $suratJalan->nomorSurat = $validateData['nomorSurat'];
        $suratJalan->tglKirim = $validateData['tglKirim'];
        $suratJalan->namaBarang = $validateData['namaBarang'];
        $suratJalan->jumlahBarang = $validateData['jumlahBarang'];
        $suratJalan->save();

        return redirect()->route('suratJalan.index')->with('success',"Data ".$validateData['nomorSurat']. " berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(suratJalan $suratJalan)
    {
        return view('suratJalan.update')->with('suratJalan', $suratJalan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, suratJalan $suratJalan)
    {
        $validateData = $request->validate([
            'nomorSurat' => 'required|unique:suratJalans',
            'tglKirim' => 'required',
            'namaBarang' => 'required',
            'jumlahBarang' => 'required'
        ]);

        $suratJalan->id=Str::uuid();
        $suratJalan->nomorSurat = $validateData['nomorSurat'];
        $suratJalan->tglKirim = $validateData['tglKirim'];
        $suratJalan->namaBarang = $validateData['namaBarang'];
        $suratJalan->jumlahBarang = $validateData['jumlahBarang'];
        $suratJalan->save();

        return redirect()->route('suratJalan.index')->with('success',"Data ".$validateData['nomorSurat']. " berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(suratJalan $suratJalan)
    {
        $suratJalan->delete();
        return redirect()->route('ikan.index')->with('success', 'Data berhasil dihapus');
    }
}
