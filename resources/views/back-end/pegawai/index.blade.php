<x-app-layout>
    <x-slot name="header">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white animate-pulse">
            {{ __('Pegawai Terbaik') }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-8">
        
        <div>
            <div class="mb-8">

                <h3 class="text-lg font-semibold mb-2">Pegawai ASN</h3>
                <a href="{{ route('pegawai.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pegawai</a>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-green-400 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4 border-r border-gray-500">No.</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">Nama</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">Jenis</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">NIP</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">Nilai Pegawai</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">Triwulan</th>
                        <th scope="col" class="px-6 py-3 border-r border-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($asnPegawais as $index => $pegawai)
                    <tr class="bg-white border border-gray-500 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 broder-r border-gray-500">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if($pegawai->photo)
                                <img class="w-10 h-10 rounded-full" src="{{ asset('images/' . $pegawai->photo) }}" alt="{{ $pegawai->nama }} image">
                                @else
                                <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                                @endif
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $pegawai->nama }}</div>
                                    <div class="font-normal text-gray-800">{{ $pegawai->jenis }}</div>
                                </div>  
                            </div>
                        </td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->jenis }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->nip ?? '-' }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->nilai }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->triwulan }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a><br>
                            <a href="{{ route('pegawai.show', $pegawai->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a><br>
                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8">
            <div class="mb-8">
            <h3 class="text-lg font-semibold mb-2">Pegawai Non-ASN</h3>
            <a href="{{ route('pegawai.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pegawai</a>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400 border border-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-green-400 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4 border border-gray-500">No.</th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">Nama</th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">Jenis</th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">Nilai Pegawai</th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">Triwulan</th>
                        <th scope="col" class="px-6 py-3 border border-gray-500">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nonAsnPegawais as $index => $pegawai)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 border-r border-gray-500">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if($pegawai->photo)
                                <img class="w-10 h-10 rounded-full" src="{{ asset('images/' . $pegawai->photo) }}" alt="{{ $pegawai->nama }} image">
                                @else
                                <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                                @endif
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $pegawai->nama }}</div>
                                    <div class="font-normal text-gray-800">{{ $pegawai->jenis }}</div>
                                </div>  
                            </div>
                        </td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->jenis }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->nilai }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">{{ $pegawai->triwulan }}</td>
                        <td class="px-6 py-4 border-r border-gray-500">
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a><br>
                            <a href="{{ route('pegawai.show', $pegawai->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a><br>
                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
