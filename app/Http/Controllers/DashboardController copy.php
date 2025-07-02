<?php

namespace App\Http\Controllers;

use App\Models\IndikatorKinerja;
use App\Models\KinerjaUtama;
use App\Models\Laporan;
use App\Models\User; // Import model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $selectedYear = $request->tahun ?? date('Y');

        // Mengambil data laporan yang diurutkan berdasarkan level_jabatan dari user tertinggi
        $dashboards = Laporan::whereYear('laporans.created_at', $selectedYear)
            ->join('users', 'laporans.user_id', '=', 'users.id')
            ->orderByDesc('users.level_jabatan')
            ->orderBy('laporans.created_at', 'desc') // Tentukan tabel yang diurutkan secara eksplisit
            ->select('laporans.*') // Pilih semua kolom dari tabel laporans
            ->latest()
            ->get();

        // Group dashboards by 'user.bidang'
        $groupedDashboards = $dashboards->groupBy(function($item) {
            return $item->user->bidang;
        });

        // Paginate each group
        $perPage = 5; // Jumlah item per halaman
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $currentItems = $groupedDashboards->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedDashboards = new LengthAwarePaginator($currentItems, count($groupedDashboards), $perPage, $currentPage);

        $indikatorKinerjas = IndikatorKinerja::all();
        $kinerjaUtamas = KinerjaUtama::all();

        // Mengambil tahun unik dari data created_at
        $tahun = Laporan::select(DB::raw('YEAR(laporans.created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        // Menyetel tahun saat ini sebagai nilai default jika tidak ada tahun yang dipilih
        $selectedYear = $request->tahun ?? date('Y');

        return view('dashboard', compact('paginatedDashboards', 'kinerjaUtamas', 'tahun', 'selectedYear'));
    }
}
