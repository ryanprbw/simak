<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Helvetica, sans-serif;
            font-size: 8px;

        }

        h2 {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-style: bold;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;

        }

        td.realisasi {
            word-wrap: break-word;
            /* Membungkus kata */
            word-break: break-all;
            /* Memecah kata panjang tanpa spasi */
            white-space: normal;
            /* Memastikan teks dibungkus */
            max-width: 50px;
            /* Tentukan lebar maksimum kolom */
        }

        thead {
            background-color: #4bff75;
        }

        .center {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .pagebreak {
            page-break-before: always;
        }
    </style>
</head>

@foreach ($laporansByBidang as $bidang => $laporans)

    <body>
        <h1 class="center">Laporan Rekap Sasaran Perangkat Daerah Tahun {{ $tahun }} Kabupaten Tapin</h1>
        <h2>Bidang: {{ $bidang }}</h2>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Sasaran Kinerja</th>
                    <th rowspan="2">Indikator</th>
                    <th rowspan="2">Target</th>
                    <th rowspan="2">Satuan</th>
                    <th colspan="3">Triwulan 1</th>
                    <th colspan="3">Triwulan 2</th>
                    <th colspan="3">Triwulan 3</th>
                    <th colspan="3">Triwulan 4</th>
                    <th rowspan="2">Jabatan</th>
                </tr>
                <tr>
                    <th>Target</th>
                    <th>Realisasi</th>
                    <th>Satuan</th>
                    <th>Target</th>
                    <th>Realisasi</th>
                    <th>Satuan</th>
                    <th>Target</th>
                    <th>Realisasi</th>
                    <th>Satuan</th>
                    <th>Target</th>
                    <th>Realisasi</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporans as $dash)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="uppercase">{{ $dash->sasaran }}</td>
                        <td>{{ $dash->indikator }}</td>
                        <td>{{ $dash->target }}</td>
                        <td>{{ $dash->satuan }}</td>
                        <td>{{ $dash->target_t1 }}</td>
                        <td>{{ $dash->realisasi_t1 }}</td>
                        <td>{{ $dash->persentasi_t1 }}</td>
                        <td>{{ $dash->target_t2 }}</td>
                        <td>{{ $dash->realisasi_t2 }}</td>
                        <td>{{ $dash->persentasi_t2 }}</td>
                        <td>{{ $dash->target_t3 }}</td>
                        <td>{{ $dash->realisasi_t3 }}</td>
                        <td>{{ $dash->persentasi_t3 }}</td>
                        <td>{{ $dash->target_t4 }}</td>
                        <td>{{ $dash->realisasi_t4 }}</td>
                        <td>{{ $dash->persentasi_t4 }}</td>
                        <td>{{ $dash->user->jabatan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div class="pagebreak"></div>
        <h1 class="center">Catatan Laporan Rekap Sasaran Perangkat Daerah Tahun {{ $tahun }} Kabupaten Tapin
        </h1>
        <h2>Bidang: {{ $bidang }}</h2>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Sasaran Kinerja</th>
                    <th rowspan="2">Indikator</th>
                    <th rowspan="2">Target</th>
                    <th rowspan="2">Satuan</th>
                    <th colspan="2">Triwulan 1</th>
                    <th colspan="2">Triwulan 2</th>
                    <th colspan="2">Triwulan 3</th>
                    <th colspan="2">Triwulan 4</th>
                    <th rowspan="2">Jabatan</th>
                </tr>
                <tr>
                    
                    <th>Faktor Pendorong</th>
                    <th>Faktor Penghambat</th>
                    
                    <th>Faktor Pendorong</th>
                    <th>Faktor Penghambat</th>
                    
                    <th>Faktor Pendorong</th>
                    <th>Faktor Penghambat</th>
                    
                    <th>Faktor Pendorong</th>
                    <th>Faktor Penghambat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($laporans as $dash)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="realisasi">{{ $dash->sasaran }}</td>
                        <td class="realisasi">{{ $dash->indikator }}</td>
                        <td>{{ $dash->target }}</td>
                        <td>{{ $dash->satuan }}</td>
                        
                        <td>{{ $dash->faktor_pendorong_t1 }}</td>
                        <td>{{ $dash->faktor_penghambat_t1 }}</td>
                        
                        <td>{{ $dash->faktor_pendorong_t2 }}</td>
                        <td>{{ $dash->faktor_penghambat_t2 }}</td>
                       
                        <td>{{ $dash->faktor_pendorong_t3 }}</td>
                        <td>{{ $dash->faktor_penghambat_t3 }}</td>
                        
                        <td>{{ $dash->faktor_pendorong_t4 }}</td>
                        <td>{{ $dash->faktor_penghambat_t4 }}</td>
                        <td>{{ $dash->user->jabatan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="18" class="text-center">Data masih Kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </body>
@endforeach

</html>
