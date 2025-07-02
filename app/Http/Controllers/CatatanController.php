<?php

namespace App\Http\Controllers;

use App\Models\IndikatorKinerja;
use App\Models\KinerjaUtama;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatatanController extends Controller
{
//     public function index()
// {
//     // Ambil semua data laporan tanpa membatasi berdasarkan pengguna
//     $laporans = Laporan::latest()->get();
    
//     // Ambil semua data indikator kinerja
//     $indikatorKinerjas = IndikatorKinerja::all();
    
//     // Ambil semua data kinerja utama
//     $kinerjaUtamas = KinerjaUtama::all();

//     // Kirim data ke view
//     return view('back-end.catatan.index', compact('laporans', 'indikatorKinerjas', 'kinerjaUtamas'));
// }

public function index()
{
    // Ambil tahun terbaru dari koleksi laporans
    $latestYear = Laporan::max('created_at');
    $latestYear = Carbon::parse($latestYear)->format('Y');

    // Ambil laporan yang sesuai dengan tahun terbaru
    $laporans = Laporan::whereYear('created_at', $latestYear)->get();

    return view('back-end.catatan.index', compact('laporans'));
}
    public function create()
    {
        return view('back-end.catatan.create'); // Ganti 'nama_view_pembuatan_catatan' dengan nama view yang sesuai
    }

    // Jika Anda juga ingin menangani penyimpanan data catatan yang baru dibuat, Anda bisa menambahkan fungsi store seperti di bawah ini:
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'catatan_kadis_t1' => 'nullable|string',
            'catatan_kadis_t2' => 'nullable|string',
            'catatan_kadis_t3' => 'nullable|string',
            'catatan_kadis_t4' => 'nullable|string',
            // Anda dapat menyesuaikan aturan validasi sesuai kebutuhan Anda
        ]);

        // Buat objek Catatan baru dengan data yang diterima dari request
        $catatan = new Laporan();
        $catatan->catatan_kadis_t1 = $request->input('catatan_kadis_t1');
        $catatan->catatan_kadis_t2 = $request->input('catatan_kadis_t2');
        $catatan->catatan_kadis_t3 = $request->input('catatan_kadis_t3');
        $catatan->catatan_kadis_t4 = $request->input('catatan_kadis_t4');
        // Lanjutkan dengan menambahkan data untuk setiap kolom yang diperlukan

        // Simpan catatan ke dalam database
        $catatan->save();

        // Redirect pengguna ke halaman yang sesuai atau berikan respons yang sesuai
        return redirect()->route('catatan.index')->with('success', 'Catatan berhasil dibuat.');
    }
    public function edit($id,$tw)
{
    // Temukan catatan berdasarkan ID yang diberikan
    $catatan = Laporan::findOrFail($id);

    // Render view untuk menampilkan form edit dengan data catatan yang dipilih
    return view('back-end.catatan.edit', compact('catatan' , 'tw'));
}

    public function update(Request $request, $id)
{
    // Validasi data yang diterima dari request
    $validate=$request->validate([
        'catatan_kadis_t'.$request->input('triwulan_kolom')=> 'required|string',
        
        // Anda dapat menyesuaikan aturan validasi sesuai kebutuhan Anda
    ]);
    //dd($validate);

    // Temukan catatan berdasarkan ID yang diberikan
    $catatan = Laporan::findOrFail($id);
    $catatan->update($validate);

    // Perbarui data catatan dengan data yang diterima dari request
    //$catatan->{'catatan_kadis_t'.$request->input('triwulan_kolom')} = $validate;
   
    // Lanjutkan dengan memperbarui data untuk setiap kolom yang diperlukan

    // Simpan perubahan catatan ke dalam database
    //$catatan->save();

    // Redirect pengguna ke halaman yang sesuai atau berikan respons yang sesuai
    return redirect()->route('catatans.index')->with('success', 'Catatan berhasil diperbarui.');
}
}
