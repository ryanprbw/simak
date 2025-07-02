<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kinerja Utama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <form action="{{ route('kinerja.store') }}" method="POST">
                    @csrf

                    <!-- Input Kinerja Utama -->
                    <div class="mb-4">
                        <label for="kinerja_utama" class="block text-sm font-medium text-gray-700">Kinerja Utama</label>
                        <input type="text" name="kinerja_utama" id="kinerja_utama" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-500">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
