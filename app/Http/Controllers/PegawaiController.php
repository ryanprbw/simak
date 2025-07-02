<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan semua data Pegawai
    public function index()
    {
        $asnPegawais = Pegawai::where('jenis', 'ASN')->get();
        $nonAsnPegawais = Pegawai::where('jenis', 'Non-ASN')->get();

        return view('back-end.pegawai.index', compact('asnPegawais', 'nonAsnPegawais'));
    
    }

    // Menampilkan form untuk menambahkan Pegawai baru
    public function create()
    {
        $pegawais = Pegawai::all(); // Mendapatkan semua data pegawai
        return view('back-end.pegawai.create', compact('pegawais'));
    }

    // Menyimpan Pegawai baru ke dalam database
    public function store(Request $request)
{
    // Validasi input berdasarkan rules Pegawai
    $rules = Pegawai::rules();

    // Jika jenis pegawai adalah Non-ASN, hapus aturan validasi untuk NIP
    if ($request->jenis === 'Non-ASN') {
        unset($rules['nip']);
    }

    // Validasi data input
    $request->validate($rules);

    // Proses penyimpanan data Pegawai
    $input = $request->all();

    if ($request->hasFile('photo')) {
        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('images'), $imageName);
        $input['photo'] = $imageName;
    }

    // Simpan data Pegawai ke dalam database
    Pegawai::create($input);

    // Redirect ke halaman index Pegawai dengan pesan sukses
    return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai berhasil ditambahkan.');
}


    // Menampilkan data Pegawai berdasarkan ID
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('back-end.pegawai.show', compact('pegawai'));
    }

    // Menampilkan form untuk mengedit data Pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('back-end.pegawai.edit', compact('pegawai'));
    }

    // Mengupdate data Pegawai ke dalam database
    public function update(Request $request, $id)
    {
        $request->validate(Pegawai::rules($id));

        $pegawai = Pegawai::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();  
            $request->photo->move(public_path('images'), $imageName);
            $input['photo'] = $imageName;
        }

        $pegawai->update($input);

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus data Pegawai dari database
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        
        // Hapus file gambar dari direktori jika ada
        if ($pegawai->photo && file_exists(public_path('images/' . $pegawai->photo))) {
            unlink(public_path('images/' . $pegawai->photo));
        }

        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil dihapus.');
    }
}
