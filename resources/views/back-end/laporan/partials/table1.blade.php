<div class="relative overflow-x-auto shadow-md sm:rounded-lg pb-8">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead id="laporan" class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400 bg-green-400">
            <tr>
                <th scope="col" class="px-6 py-3 border-r border-gray-800">
                    No.
                </th>
                <th scope="col" class="px-6 py-3 text-gray-900 text-center dark:text-white border-r border-gray-800">
                    Sasaran Kinerja
                </th>
                <th scope="col" class="px-6 py-3 text-gray-900 text-center dark:text-white border-r border-gray-800">
                    Indikator
                </th>
                <th scope="col" class="px-6 py-3 text-gray-900 text-center dark:text-white border-r border-gray-800">
                    Target
                </th>
                <th scope="col" class="px-6 py-3 text-gray-900 text-center dark:text-white border-r border-gray-800">
                    Satuan
                </th>

                <th scope="col" class="px-6 py-3 text-gray-900 text-center border-r border-gray-900 dark:text-white">
                    Aksi
                </th>
                <th scope="col" class="px-6 py-3 text-gray-900 text-center border-gray-900 dark:text-white">
                    di Update pada :
                </th>
            </tr>
        </thead>
        <tbody>
            @php $previousSasaran = null; @endphp
            @foreach ($laporans as $index => $lap)
                <tr class="bg-white border-b border-gray-400 dark:bg-gray-800 dark:border-gray-700 hover:bg-green-300">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    @if ($previousSasaran != $lap->sasaran)
                        <td class="px-6 py-4 text-gray-900 border-l border-gray-400 dark:text-white"
                            rowspan="{{ $laporans->where('sasaran', $lap->sasaran)->count() }}">
                            {{ $lap->sasaran }}
                        </td>
                    @endif
                    <td class="px-6 py-4 text-gray-900 border-l border-gray-400 dark:text-white">
                        {{ $lap->indikator }}
                    </td>
                    <td class="px-6 py-4 text-gray-900 border-l border-gray-400 dark:text-white">
                        {{ $lap->target }}
                    </td>
                    <td class="px-6 py-4 text-gray-900 text-center border-l border-gray-400 dark:text-white">
                        {{ $lap->satuan }}
                    </td>
                    <td class="text-center border-l border-gray-400 align-middle">
                        <div class="flex">
                            <form action="{{ route('laporans.destroy', $lap->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="flex">
                                    <a href="{{ route('laporans.edit', $lap->id) }}"
                                        class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-gray-400 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">EDIT</a>

                                    <!-- Tombol untuk toggle modal -->
                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        class="ml-2 btn  py-2.5 px-2.5 text-xs font-medium text-gray-900 focus:outline-none bg-red-400 rounded-lg border border-gray-200 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:bg-blue-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-blue-700">DELETE</button>
                                </div>

                                <!-- Modal -->
                               
                            </form>

                        </div>
                    </td>
                    @if ($previousSasaran != $lap->sasaran)
                        <td class="px-6 py-4 text-gray-900 text-center border-l border-gray-400 dark:text-white">
                            {{ $lap->updated_at }}
                        </td>
                    @endif
                    @php $previousSasaran = $lap->sasaran; @endphp
                </tr>
            @endforeach
            @if ($laporans->isEmpty())
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center dark:text-white">
                        <div class="alert alert-danger">
                            Data Laporan belum Tersedia.
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>

    </table>

    <div class="mt-2 align-middle text-center  border-b border-gray-700">


    </div>
</div>
