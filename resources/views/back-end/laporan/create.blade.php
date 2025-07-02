<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="sasaran"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sasaran</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" class="form-control @error('sasaran') is-invalid @enderror" name="sasaran"
                        value="{{ old('sasaran') }}" placeholder="Masukan Sasaran">
                    @error('sasaran')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="indikator"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Indikator</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" class="form-control @error('indikator') is-invalid @enderror" name="indikator"
                        value="{{ old('indikator') }}" placeholder="Masukan Indikator">
                    @error('indikator')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="target"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" class="form-control @error('target') is-invalid @enderror" name="target"
                        value="{{ old('target') }}" placeholder="Masukan Target">
                    @error('target')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="satuan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan"
                        value="{{ old('satuan') }}" placeholder="Masukan Satuan">
                    @error('satuan')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- triwulan 1 --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Triwulan
                                I</span>
                        </h1>
                        <div class="grid gap-6  md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target
                                    Triwulan
                                    I</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('target_t1') is-invalid @enderror"
                                    name="target_t1" value="{{ old('target_t1') }}"
                                    placeholder="Masukkan Target Triwulan I">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Realisasi
                                    Triwulan
                                    I</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('realisasi_t1') is-invalid @enderror"
                                    name="realisasi_t1" value="{{ old('realisasi_t1') }}"
                                    placeholder="Masukkan Realisasi Triwulan I">

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('persentasi_t1') is-invalid @enderror"
                                    name="persentasi_t1" value="{{ old('persentasi_t1') }}"
                                    placeholder="Masukkan Satuan">
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md mr-8">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- catatan triwulan 1 --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-sky-400">CATATAN
                                Triwulan
                                I</span>
                        </h1>
                        <div class="grid gap-6  md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan
                                    Realisasi Triwulan I</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('realisasi_ctt_t1') is-invalid @enderror"
                                    name="realisasi_ctt_t1" value="{{ old('realisasi_ctt_t1') }}"
                                    placeholder="Masukkan Catatan Realisasi Triwulan I">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Faktor
                                    Pendorong Triwulan I</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_pendorong_t1') is-invalid @enderror"
                                    name="faktor_pendorong_t1" value="{{ old('faktor_pendorong_t1') }}"
                                    placeholder="Masukkan Faktor Pendorong Triwulan I">

                                @error('faktor_pendorong_t1')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Penghambat Triwulan I</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_penghambat_t1') is-invalid @enderror"
                                    name="faktor_penghambat_t1" value="{{ old('faktor_penghambat_t1') }}"
                                    placeholder="Masukkan Satuan">

                                @error('faktor_penghambat_t1')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- triwulan II --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Triwulan
                                II</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target
                                    Triwulan
                                    II</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('target_t2') is-invalid @enderror"
                                    name="target_t2" value="{{ old('target_t2') }}"
                                    placeholder="Masukkan Target Triwulan 2">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Realisasi
                                    Triwulan
                                    I</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('realisasi_t2') is-invalid @enderror"
                                    name="realisasi_t2" value="{{ old('realisasi_t2') }}"
                                    placeholder="Masukkan Target Triwulan II">

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('persentasi_t2') is-invalid @enderror"
                                    name="persentasi_t2" value="{{ old('persentasi_t2') }}"
                                    placeholder="Masukkan Satuan">
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- catatan triwulan II --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-sky-400">CATATAN
                                Triwulan
                                II</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan
                                    Realisasi Triwulan II</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('realisasi_ctt_t2') is-invalid @enderror"
                                    name="realisasi_ctt_t2" value="{{ old('realisasi_ctt_t2') }}"
                                    placeholder="Masukkan Catatan Realisasi Triwulan II">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Pendorong Triwulan II</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_pendorong_t2') is-invalid @enderror"
                                    name="faktor_pendorong_t2" value="{{ old('faktor_pendorong_t2') }}"
                                    placeholder="Faktor Pendorong Triwulan II">
                                @error('faktor_pendorong_t2')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Penghambat Triwulan II</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_penghambat_t2') is-invalid @enderror"
                                    name="faktor_penghambat_t2" value="{{ old('faktor_penghambat_t2') }}"
                                    placeholder="Faktor Penghambat Triwulan II">
                                @error('faktor_penghambat_t2')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- Triwulan 3 --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Triwulan
                                III</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target
                                    Triwulan
                                    III</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('target_t3') is-invalid @enderror"
                                    name="target_t3" value="{{ old('target_t3') }}"
                                    placeholder="Masukkan Target Triwulan III">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Realisasi
                                    Triwulan
                                    III</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('realisasi_t3') is-invalid @enderror"
                                    name="realisasi_t3" value="{{ old('realisasi_t3') }}"
                                    placeholder="Masukkan Realisasi Triwulan III">

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('persentasi_t3') is-invalid @enderror"
                                    name="persentasi_t3" value="{{ old('persentasi_t3') }}"
                                    placeholder="Masukkan Satuan">
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- Triwulan 3 --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-sky-400">CATATAN
                                Triwulan
                                III</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan
                                    Realisasi
                                    Triwulan
                                    III</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('realisasi_ctt_t3') is-invalid @enderror"
                                    name="realisasi_ctt_t3" value="{{ old('realisasi_ctt_t3') }}"
                                    placeholder="Masukkan Catatan Realisasi Triwulan III">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Pendorong Triwulan III</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_pendorong_t3') is-invalid @enderror"
                                    name="faktor_pendorong_t3" value="{{ old('faktor_pendorong_t3') }}"
                                    placeholder="Masukkan Faktor Pendorong Triwulan III">
                                @error('faktor_pendorong_t3')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Penghambat
                                    Triwulan
                                    III</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_penghambat_t3') is-invalid @enderror"
                                    name="faktor_penghambat_t3" value="{{ old('faktor_penghambat_t3') }}"
                                    placeholder="Masukkan Faktor Penghambat Triwulan III">
                                @error('faktor_penghambat_t3')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- Triwulan IV --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Triwulan
                                IV</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target
                                    Triwulan
                                    IV</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('target_t4') is-invalid @enderror"
                                    name="target_t4" value="{{ old('target_t4') }}"
                                    placeholder="Masukkan Sasaran Triwulan IV">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Realisasi
                                    Triwulan
                                    IV</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('realisasi_t4') is-invalid @enderror"
                                    name="realisasi_t4" value="{{ old('realisasi_t4') }}"
                                    placeholder="Masukkan Realisasi Triwulan IV">

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" class="form-control @error('persentasi_t4') is-invalid @enderror"
                                    name="persentasi_t4" value="{{ old('persentasi_t4') }}"
                                    placeholder="Masukkan Satuan">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-gray-200 dark:bg-gray-900 rounded-md">
                    <div class=" px-4 mx-auto max-w-screen-xl text-center ">
                        {{-- Triwulan IV --}}
                        <h1
                            class="mb-4 mx-auto text-center text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-blue-600 from-sky-400">CATATAN
                                Triwulan
                                IV</span>
                        </h1>
                        <div class="grid gap-6 mb-6 md:grid-cols-3 m-4 ">

                            <div>
                                <label for="first_name"
                                    class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan
                                    Realisasi Triwulan IV</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('realisasi_ctt_t4') is-invalid @enderror"
                                    name="realisasi_ctt_t4" value="{{ old('realisasi_ctt_t4') }}"
                                    placeholder="Masukkan Catatan Realisasi Triwulan IV">

                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Faktor
                                    Pendorong Triwulan IV</label>

                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_pendorong_t4') is-invalid @enderror"
                                    name="faktor_pendorong_t4" value="{{ old('faktor_pendorong_t4') }}"
                                    placeholder="Masukkan Faktor Pendorong Triwulan IV">
                                    @error('faktor_pendorong_t4')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror

                            </div>
                            <div>
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Faktor
                                    Penghambat Triwulan IV</label>
                                <input
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text"
                                    class="form-control @error('faktor_penghambat_t4') is-invalid @enderror"
                                    name="faktor_penghambat_t4" value="{{ old('faktor_penghambat_t4') }}"
                                    placeholder="Masukkan Faktor Penghambat Triwulan IV">
                                    @error('faktor_penghambat_t4')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </section>

                
                
                
                

                <button type="submit"
                    class="btn btn-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <button type="reset"
                    class="btn btn-md btn-warning text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset</button>

            </form>
        </div>




    </div>
</x-app-layout>
