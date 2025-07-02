<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2
            class=" text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white animate-pulse">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    @if (session('success'))
    @endif

    <div class="">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <div class="bg-white  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div
                    class=" text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white text-center ">
                    {{ __('CAPAIAN KINERJA DISDUKCAPIL KABUPATEN TAPIN TAHUN ') }}{{ $latestYear }}


                </div>

                <div class="max-w-full w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 pt-8">
                    <div class="flex justify-between mb-3">
                        <div class="flex items-center">
                            <div class="flex justify-center items-center">
                                <!-- Breadcrumb -->

                                <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                                    aria-label="Breadcrumb">
                                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                        <li class="inline-flex items-center">
                                            <a href="{{ route('dashboards.index') }}"
                                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                                <svg class="w-3 h-3 me-2.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                                </svg>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 "
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <a href="#laporan"
                                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tambah
                                                    Laporan</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 "
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <a href="#catatan"
                                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Catatan
                                                    /Triwulan</a>
                                            </div>
                                        </li>
                                        <li aria-current="page">
                                            <div class="flex items-center">
                                                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span
                                                    class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                                    Hasil Laporan</span>
                                            </div>
                                        </li>
                                    </ol>
                                </nav>
                                <svg data-popover-target="chart-info" data-popover-placement="bottom"
                                    class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                        <div class="flex justify-between items-center pt-5">
                            <!-- Button -->
                            <a href="{{ route('laporans.create') }}"
                                class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Tambah
                                <span
                                    class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                                    {{ $count }}
                                </span>
                            </a>

                            <a href="{{ route('laporans.create') }}"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                Tambah Laporan Anda
                                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>





                {{-- TABEL 2 LAPORAN REALISASI --}}
                @include('back-end.laporan.partials.table1')
                @include('back-end.laporan.partials.table2')
                @include('back-end.laporan.partials.table3')


            </div>





        </div>



    </div>
</x-app-layout>
