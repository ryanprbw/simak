<?php

namespace App\Http\Controllers;

use App\Models\KinerjaUtama;
use App\Models\IndikatorKinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class IndikatorKinerjaController extends Controller
{
    // Menampilkan halaman index
    public function index()
    {
        $indikatorKinerjas = IndikatorKinerja::all();
        return view('back-end.perjanjiankinerja.indikator_kinerja.create', compact('indikatorKinerjas'));
    }

    // Menampilkan halaman create
    public function create()
    {
        // Di sini Anda bisa menambahkan logika untuk mendapatkan data yang dibutuhkan untuk view
        $kinerjaUtamas = KinerjaUtama::all();
        return view('back-end.perjanjiankinerja.indikator_kinerja.create',compact('kinerjaUtamas'));
    }

    
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'kinerja_utama_id' => 'required|exists:kinerja_utamas,id',
            'indikator_kinerja' => 'required|string',
            'target' => 'nullable|string',
            'realisasi' => 'nullable|string',
        ]);

        try {
            // Buat objek IndikatorKinerja baru
            $indikatorKinerja = new IndikatorKinerja();
            $indikatorKinerja->kinerja_utama_id = $request->kinerja_utama_id;
            $indikatorKinerja->indikator_kinerja = $request->indikator_kinerja;
            $indikatorKinerja->target = $request->target;
            $indikatorKinerja->realisasi = $request->realisasi;

            // Simpan objek ke dalam database
            $indikatorKinerja->save();

            // Berhasil, redirect ke halaman atau berikan respons yang sesuai
            return redirect()->route('indikator.index')->with('success', 'Data indikator kinerja berhasil disimpan.');
        } catch (\Exception $e) {
            // Gagal menyimpan, tampilkan pesan kesalahan
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data. Silakan coba lagi.']);
        }
    }
    
        // Metode untuk menghasilkan kinerja_utama_id secara otomatis
        private function generateKinerjaUtamaId()
        {
            // Misalnya, Anda ingin mengambil ID dari kinerja utama terbaru
        $latestKinerjaUtama = KinerjaUtama::latest()->first();

        if ($latestKinerjaUtama) {
            return $latestKinerjaUtama->id;
        } else {
            // Jika tidak ada kinerja utama yang tersedia, Anda bisa menangani kasus ini sesuai kebutuhan aplikasi Anda
            // Contoh: Jika tidak ada kinerja utama yang tersedia, Anda bisa mengembalikan nilai default atau memunculkan pengecualian
            // Di sini, saya hanya mengembalikan 0 sebagai contoh
            return 0;
        }
        }
    

    // Menampilkan halaman edit
    public function edit($id)
    {
        $indikator = IndikatorKinerja::findOrFail($id);
        $kinerjaUtamas = KinerjaUtama::all();
        // Kirim data indikator ke view update
        return view('back-end.perjanjiankinerja.indikator_kinerja.edit', compact('indikator','kinerjaUtamas'));
    }


    // Mengupdate data
    // Mengupdate data
// Mengupdate data


public function update(Request $request, $id)
{
    try {
        // Validasi input jika diperlukan
        $request->validate([
            'indikator_kinerja' => 'required|string',
            'target' => 'nullable|string',
            'realisasi' => 'nullable|string',
            'kinerja_utama_id' => 'required|exists:kinerja_utamas,id', // Pastikan kinerja_utama_id ada di tabel kinerja_utamas
        ]);

        // Temukan data indikator yang akan diupdate
        $indikator = IndikatorKinerja::findOrFail($id);
        
        // Update data indikator dengan data yang baru
        $indikator->update([
            'indikator_kinerja' => $request->indikator_kinerja,
            'target' => $request->target,
            'realisasi' => $request->realisasi,
            'kinerja_utama_id' => $request->kinerja_utama_id,
        ]);
        

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kinerja.index')
            ->with('success', 'Data kinerja berhasil diperbarui.');
    } catch (ValidationException $e) {
        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
        return back()->withErrors($e->errors())->withInput();
    }
}


    public function destroy($id)
    {
        try {
            // Temukan data indikator yang akan dihapus
            $indikator = IndikatorKinerja::findOrFail($id);

            // Hapus data indikator
            $indikator->delete();

            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('indikator.index')
                ->with('success', 'Data kinerja berhasil dihapus.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, redirect kembali ke halaman sebelumnya dengan pesan kesalahan
            return Redirect::back()->withErrors(['error' => 'Gagal menghapus data. Silakan coba lagi.']);
        }
    }
}
