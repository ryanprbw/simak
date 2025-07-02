<div class="relative overflow-x-auto shadow-md sm:rounded-lg pb-8">
    <table id="catatan" class=" table-auto min-w-full divide-y divide-gray-200 border border-gray-200">
        <thead class="bg-green-400">
            <tr>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"
                    rowspan="2">No.</th>
                <th
                    class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"rowspan="2">
                    Dibuat oleh:</th>
                <th
                    class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"rowspan="2">
                    Sasaran Kinerja</th>
                <th
                    class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"rowspan="2">
                    Indikator</th>
                <th
                    class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"rowspan="2">
                    Target</th>
                <th
                    class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"rowspan="2">
                    Satuan</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"
                    colspan="4">Triwulan 1</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"
                    colspan="4">Triwulan 2</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"
                    colspan="4">Triwulan 3</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600"
                    colspan="4">Triwulan 4</th>
            </tr>
            <tr>

                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Realisasi T1</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Pendorong</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Penghambat</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Kepala Dinas Triwulan 1</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Realisasi T2</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Pendorong</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Penghambat</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Kepala Dinas Triwulan 2</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Realisasi T3</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Pendorong</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Penghambat</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Kepala Dinas Triwulan 3</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Realisasi T4</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Pendorong</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Faktor Penghambat</th>
                <th
                    class="px-2 py-3 text-xs font-bold text-gray-800 dark:text-white uppercase tracking-wider border border-gray-600">
                    Catatan Kepala Dinas Triwulan 4</th>



            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-600">
            @php $previousSasaran = null; @endphp
            @forelse ($laporans as $dash)
                <tr class="hover:bg-green-300">
                    <td class="px-6 py-4  text-center border border-gray-600">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4  text-center border border-gray-600">
                        {{ optional($dash->user)->name ?? 'Tidak diketahui' }}

                    </td>
                    @if ($previousSasaran != $dash->sasaran)
                        <td class="px-6 py-4  text-center border border-gray-600"
                            rowspan="{{ $laporans->where('sasaran', $dash->sasaran)->count() }}">
                            {{ $dash->sasaran }}
                        </td>
                    @endif
                    <td class="px-6 py-4  text-center border border-gray-600">
                        {{ $dash->indikator }}
                    </td>
                    <td class="px-6 py-4  text-center border border-gray-600">
                        {{ $dash->target }}
                    </td>
                    <td class="px-6 py-4  text-center border border-gray-600">
                        {{ $dash->satuan }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->realisasi_ctt_t1 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_pendorong_t1 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_penghambat_t1 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->catatan_kadis_t1 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->realisasi_ctt_t2 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_pendorong_t2 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_penghambat_t2 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->catatan_kadis_t2 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->realisasi_ctt_t3 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_pendorong_t3 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_penghambat_t3 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->catatan_kadis_t3 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->realisasi_ctt_t4 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_pendorong_t4 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->faktor_penghambat_t4 }}
                    </td>
                    <td class="px-2 py-4  text-center border border-gray-600">
                        {{ $dash->catatan_kadis_t4 }}
                    </td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                @php $previousSasaran = $dash->sasaran; @endphp
            @empty
                <tr>
                    <td colspan="21" class="px-6 py-4 text-center">
                        <div class="bg-gray-100 border border-gray-300 rounded-lg p-8">
                            <p class="text-gray-600 text-lg font-semibold">Data masih Kosong</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>
