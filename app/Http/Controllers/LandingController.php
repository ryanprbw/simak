<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Carousel;

class LandingController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        // Mengambil data pegawai ASN dengan nilai tertinggi pada triwulan terakhir
        $pegawaiASN = Pegawai::where('jenis', 'ASN')
            ->latest('triwulan')
            ->first();

        // Mengambil data pegawai non-ASN dengan nilai tertinggi pada triwulan terakhir
        $pegawaiNonASN = Pegawai::where('jenis', 'Non-ASN')
            ->latest('triwulan')
            ->first();

        // Mengambil data carousels
        $carousels = Carousel::all(); // Ubah sesuai kebutuhan, misalnya Pagination

        // Kirim data pegawai ASN, Non-ASN, dan carousels ke halaman beranda
        return view('front-end.landing', compact('pegawaiASN', 'pegawaiNonASN', 'carousels', 'pegawai'));
    }
}
