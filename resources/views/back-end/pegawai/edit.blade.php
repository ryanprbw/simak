<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $pegawai->nama }}" required>
                        </div>

                        <!-- Jenis (ASN/Non-ASN) -->
                        <div class="mb-4">
                            <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                            <select name="jenis" id="jenis" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                <option value="ASN" {{ $pegawai->jenis == 'ASN' ? 'selected' : '' }}>ASN</option>
                                <option value="Non-ASN" {{ $pegawai->jenis == 'Non-ASN' ? 'selected' : '' }}>Non-ASN</option>
                            </select>
                        </div>

                        <!-- NIP -->
                        <div class="mb-4">
                            <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
                            <input type="text" name="nip" id="nip" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $pegawai->nip }}">
                        </div>

                        <!-- Nilai Pegawai -->
                        <div class="mb-4">
                            <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai Pegawai</label>
                            <input type="text" name="nilai" id="nilai" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $pegawai->nilai }}" required>
                        </div>

                        <!-- Triwulan -->
                        <div class="mb-4">
                            <label for="triwulan" class="block text-sm font-medium text-gray-700">Triwulan</label>
                            <input type="number" name="triwulan" id="triwulan" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $pegawai->triwulan }}" required>
                        </div>

                        <!-- Photo -->
                        <div class="mb-4">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" name="photo" id="photo" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('pegawai.index') }}" class="text-sm text-gray-600 underline">Kembali</a>

                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
