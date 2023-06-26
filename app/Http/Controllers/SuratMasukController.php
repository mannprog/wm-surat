<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.surat-masuk.surat_masuk', [
            'data' => SuratMasuk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.surat-masuk.pages.create');
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
            'pengirim' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        SuratMasuk::create($validatedData);

        return redirect()->to('surat-masuk')->with('success', 'Surat masuk berhasil ditambahkan');
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
        $data = SuratMasuk::findOrFail($id);

        return view('dashboard.pages.surat-masuk.pages.edit', [
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
            'pengirim' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);

        SuratMasuk::where('id', $id)->update($validatedData);

        return redirect()->to('surat-masuk')->with('edit', 'Surat masuk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        SuratMasuk::destroy($suratMasuk->id);

        return redirect()->to('surat-masuk')->with('delete', 'Surat masuk berhasil dihapus');
    }
}