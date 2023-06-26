<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.surat-keluar.surat_keluar', [
            'data' => SuratKeluar::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.surat-keluar.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        SuratKeluar::create($validatedData);

        return redirect()->to('surat-keluar')->with('success', 'Surat keluar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SuratKeluar::findOrFail($id);

        return view('dashboard.pages.surat-keluar.pages.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        SuratKeluar::where('id', $id)->update($validatedData);

        return redirect()->to('surat-keluar')->with('edit', 'Surat keluar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        SuratKeluar::destroy($suratKeluar->id);

        return redirect()->to('surat-keluar')->with('delete', 'Surat keluar berhasil dihapus');
    }
}