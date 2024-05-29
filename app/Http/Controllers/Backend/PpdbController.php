<?php

namespace App\Http\Controllers\Backend;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppdb = Ppdb::all();
        return view('ppdb.index', compact('ppdb'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        // Validate the request
        $validated = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'ttg_siswa' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nisn' => 'required|string|unique:ppdbs,nisn|max:255',
            'alamat_siswa' => 'required|string|max:255',
            'anak' => 'required|integer',
            'saudara' => 'required|integer',
            'tlpn_siswa' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'alamat_ortu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'tlpn_ayah' => 'required|string|max:255',
            'tlpn_ibu' => 'required|string|max:255',
        ]);

        // Create a new PPDB record
        Ppdb::create($validated);

        // Redirect or return a response
        return redirect()->route('ppdb.index')->with('success', 'Data Ppdb Telah Tersimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $ppdb = Ppdb::find($id);
    if ($ppdb) {
        $ppdb->delete();
        return redirect()->back()->with('success', 'Data PPDB berhasil dihapus.');
    }
    return redirect()->back()->with('error', 'Data PPDB tidak ditemukan.');
}

}
