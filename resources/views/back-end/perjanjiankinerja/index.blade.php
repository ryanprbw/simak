<x-app-layout>
    <x-slot name="header">
        <h2
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white animate-pulse">
            {{ __('Perjanjian Kinerja ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div
                        class="mb-4 uppercase text-center text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                        Tabel Perjanjian Kinerja
                    </div>
                    {{-- <div class="flex justify-end mb-4">
                        <select onchange="window.location.href=this.value"
                            class="bg-white border border-gray-300 rounded-md px-4 py-2">
                            <option value="" selected>Pilih Tindakan</option>
                            <option value="{{ route('kinerja.create') }}">Tambah Kinerja Utama</option>
                            <option value="{{ route('indikator.create') }}">Tambah Indikator Kinerja</option>
                        </select>
                    </div> --}}



                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">Tambah Kinerja Utama / Indikator <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('kinerja.create') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah
                                    Kinerja Utama</a>
                            </li>
                            <li>
                                <a href="{{ route('indikator.create') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah
                                    Indikator Kinerja</a>
                            </li>

                        </ul>
                    </div>



                    <div class="mt-6">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400 bg-green-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-r border-gray-200">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-r border-gray-200">
                                        Kinerja Utama
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-r border-gray-200">
                                        Indikator Kinerja
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-r border-gray-200">
                                        Target
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-r border-gray-200">
                                        Realisasi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-r border-gray-200">
                                        Aksi
                                    </th>


                                    <th scope="col"
                                        class="px-6 py-3 text-gray-900 text-center border-l border-gray-900">
                                        di Update pada :
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kinerjaUtamas as $ku)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-green-300 border-r border-gray-400">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4 text-gray-900 border-l border-gray-400">
                                            {{ $ku->kinerja_utama }}
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('kinerja.destroy', $ku->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-red-400  rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">HAPUS</button>
                                            </form>


                                            <a href="{{ route('kinerja.edit', $ku->id) }}"
                                                class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-gray-400 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">EDIT</a>
                
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 border-l border-gray-400">
                                            @foreach ($ku->indikatorKinerjas as $indikator)
                                                {{ $indikator->indikator_kinerja }} <br> <br>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 border-l border-gray-400">
                                            @foreach ($ku->indikatorKinerjas as $indikator)
                                                {{ $indikator->target }} <br> <br>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 border-l border-gray-400">
                                            @foreach ($ku->indikatorKinerjas as $indikator)
                                                {{ $indikator->realisasi }} <br><br>
                                            @endforeach
                                        </td>

                                        <td class="text-center border-l border-gray-400 align-middle">

                                            @foreach ($ku->indikatorKinerjas as $indikator)
                                                <div class="flex">

                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('indikator.destroy', $indikator->id) }}"
                                                        method="POST" class="inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-red-400  rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">HAPUS</button>
                                                    </form>
                                                    <a href="{{ route('indikator.edit', $indikator->id) }}"
                                                        class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-yellow-400  rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">EDIT</a>
                                                </div>
                                            @endforeach
                                        </td>





                                        <td class="px-6 py-4 text-gray-900 text-center border-l border-gray-400">
                                            {{ $ku->updated_at }}
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="7"
                                            class="px-6 py-4 text-gray-900 text-center border-l border-gray-400">
                                            <div class="alert alert-danger">
                                                Data Laporan belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
