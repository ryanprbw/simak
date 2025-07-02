<x-app-layout>
    <x-slot name="header">
        <h2
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white animate-pulse">
            {{ __('Catatan Kepala Dinas') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div class="bg-white  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center ">
                    {{ __('CAPAIAN KINERJA DISDUKCAPIL KABUPATEN TAPIN TAHUN 2024') }}
                </div>


            </div>


            {{-- Catatan --}}
            <div class="relative overflow-x-auto shadow-md -lg mt-8">
                <a href="#"
                    class="inline-flex mb-4 items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Jumlah
                    <span
                        class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                        {{ $laporans->count() }}
                    </span>
                </a>


                <div class="overflow-x-auto flex-normal relative">

                    <table class="table-auto min-w-full divide-y divide-gray-200 border border-gray-200 mb-8">
                        <thead class="bg-green-400">
                            <tr>
                                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"
                                    rowspan="2">No.</th>
                                <th
                                    class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"rowspan="2">
                                    Dibuat oleh:</th>
                                <th
                                    class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"rowspan="2">
                                    Sasaran Kinerja</th>
                                <th
                                    class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"rowspan="2">
                                    Indikator</th>
                                <th
                                    class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"rowspan="2">
                                    Target</th>
                                <th
                                    class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"rowspan="2">
                                    Satuan</th>
                                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"
                                    colspan="4">Triwulan 1</th>
                                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"
                                    colspan="4">Triwulan 2</th>
                                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"
                                    colspan="4">Triwulan 3</th>
                                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600"
                                    colspan="4">Triwulan 4</th>
                            </tr>
                            <tr>

                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Realisasi</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Pendukung</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Penghambat</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">Catatan
                                </th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Realisasi</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Pendukung</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Penghambat</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">Catatan
                                </th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Realisasi</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Pendukung</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Penghambat</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">Catatan
                                </th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Realisasi</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Pendukung</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">
                                    Faktor Penghambat</th>
                                <th
                                    class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600">Catatan
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-600 ">
                            @foreach ($laporans as $dash)
                                <tr class="hover:bg-green-300">
                                    <td class="px-6 py-4  text-center border border-gray-600 ">
                                        {{ $loop->iteration }}</td>
                                    <td class="px-6 py-4  text-center border border-gray-600">
                                        {{ $dash->user->name }}</td>
                                    <td class="px-6 py-4  text-center border border-gray-600">
                                        {{ $dash->sasaran }}</td>
                                    <td class="px-6 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->indikator }}</td>
                                    <td class="px-6 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->target }}</td>
                                    <td class="px-6 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->satuan }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->realisasi_ctt_t1 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_pendorong_t1 }}</td>
                                        <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                            {{ $dash->faktor_penghambat_t1 }}
                                        </td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600"><a
                                            href="{{ route('catatans.edit', [$dash->id,1]) }}"
                                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"><svg
                                                class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                            </svg></a> <br>{{ $dash->catatan_kadis_t1 }}</td>

                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->realisasi_ctt_t2 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_pendorong_t2 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_penghambat_t2 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600"><a
                                        href="{{ route('catatans.edit', [$dash->id,2]) }}"
                                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"><svg
                                            class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                        </svg></a> <br>
                                        {{ $dash->catatan_kadis_t2 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->realisasi_ctt_t3 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_pendorong_t3 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_penghambat_t3 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600"><a
                                        href="{{ route('catatans.edit', [$dash->id,3]) }}"
                                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"><svg
                                            class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                        </svg></a> <br>
                                        {{ $dash->catatan_kadis_t3 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->realisasi_ctt_t4 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_pendorong_t4 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600">
                                        {{ $dash->faktor_penghambat_t4 }}</td>
                                    <td class="px-2 py-4 whitespace-normal text-center border border-gray-600"><a
                                        href="{{ route('catatans.edit', [$dash->id,4]) }}"
                                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"><svg
                                            class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                        </svg></a> <br>
                                        {{ $dash->catatan_kadis_t4 }}</td>
                                </tr>
                                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>





    </div>


    </div>
</x-app-layout>
