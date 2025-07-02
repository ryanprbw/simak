<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Detail Pegawai</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Nama:</p>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pegawai->nama }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Jenis:</p>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pegawai->jenis }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">NIP:</p>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pegawai->nip ?? '-' }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Nilai Pegawai:</p>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pegawai->nilai }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Triwulan:</p>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $pegawai->triwulan }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Photo:</p>
                                @if($pegawai->photo)
                                <img class="mt-2 w-40 h-40 object-cover rounded-md" src="{{ asset('images/' . $pegawai->photo) }}" alt="{{ $pegawai->nama }} image">
                                @else
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">No Photo Available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center mt-4">
        <a href="{{ route('pegawai.index') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600 underline">Kembali</a>
    </div>
</x-app-layout>
