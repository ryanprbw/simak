<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm  rounded-md @error('nama') border-red-500 @enderror"
                                required>
                            @error('nama')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Jenis (ASN/Non-ASN) -->
                        <div class="mb-4">
                            <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                            <select name="jenis" id="jenis"
                                class="mt-1 block w-full py-2 px-3 border  bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('jenis') border-red-500 @enderror"
                                required>
                                <option value="ASN">ASN</option>
                                <option value="Non-ASN">Non-ASN</option>
                            </select>
                            @error('jenis')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- NIP -->
                        <div class="mb-4">
                            <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
                            <input type="text" name="nip" id="nip"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm  rounded-md @error('nip') border-red-500 @enderror">
                            @error('nip')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nilai Pegawai -->
                        <div class="mb-4">
                            <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai Pegawai</label>
                            <input type="text" name="nilai" id="nilai"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm  rounded-md @error('nilai') border-red-500 @enderror"
                                required>
                            @error('nilai')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Triwulan -->
                        <div class="mb-4">
                            <label for="triwulan" class="block text-sm font-medium text-gray-700">Triwulan</label>
                            <input type="number" name="triwulan" id="triwulan"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm  rounded-md @error('triwulan') border-red-500 @enderror"
                                required>
                            @error('triwulan')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Photo -->
                        <div class="mb-4">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" name="photo" id="photo"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm  rounded-md @error('photo') border-red-500 @enderror">
                            @error('photo')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('pegawai.index') }}" class="text-sm text-gray-600 underline">Kembali</a>

                            <button type="submit"
                                class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Tambah Pegawai
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const jenisInput = document.getElementById('jenis');
            const nipInput = document.getElementById('nip');

            // Initial state
            if (jenisInput.value === 'Non-ASN') {
                nipInput.disabled = true;
            }

            // Event listener to toggle disabled state of NIP input
            jenisInput.addEventListener('change', function () {
                nipInput.disabled = this.value === 'Non-ASN';
            });
        });
    </script>
</x-app-layout>
