<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Data Kinerja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('indikator.update', $indikator->id) }}" class="max-w-md mx-auto">
                    @csrf
                    @method('PUT')

                    <!-- Dropdown untuk memilih kinerja utama -->
                    <label for="kinerja_utama_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kinerja
                        Utama</label>
                    <select name="kinerja_utama_id" class="form-control @error('kinerja_utama_id') is-invalid @enderror">
                        @foreach ($kinerjaUtamas as $kinerjaUtama)
                            <option value="{{ $kinerjaUtama->id }}">{{ $kinerjaUtama->kinerja_utama }}</option>
                        @endforeach
                    </select>
                    @error('kinerja_utama_id')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            {{ $message }}
                        </div>
                    @enderror


                    <!-- Input untuk indikator kinerja -->
                    <div class="relative z-0 w-full mb-5 group mt-8">
                        <input type="text" name="indikator_kinerja" id="indikator_kinerja"
                            value="{{ $indikator->indikator_kinerja }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="indikator_kinerja"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Indikator
                            Kinerja</label>
                    </div>

                    <!-- Input untuk target -->
                    <div class="relative z-0 w-full mb-5 group mt-8">
                        <input type="text" name="target" id="target" value="{{ $indikator->target }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="target"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Target</label>
                    </div>

                    <!-- Input untuk realisasi -->
                    <div class="relative z-0 w-full mb-5 group mt-8">
                        <input type="text" name="realisasi" id="realisasi" value="{{ $indikator->realisasi }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="realisasi"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Realisasi</label>
                    </div>

                    <!-- Button untuk menyimpan -->
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                </form>
                <a href="{{ route('kinerja.index') }}"
                    class="block mt-3 text-sm text-gray-600 hover:text-gray-900">Batal</a>
            </div>

        </div>
    </div>
</x-app-layout>
