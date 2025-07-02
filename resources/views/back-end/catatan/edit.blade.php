<x-app-layout>
    <x-slot name="header">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white">
            {{ __('Buat Catatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('catatans.update', $catatan->id) }}">
                        @csrf
                        @method('PUT')
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white">Tambahkan '-' apabila catatan ingin dikosongkan.</h1>
        
                        <div class="mb-4">
                            <label for="catatan_kadis_t{{$tw}}"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-600">Catatan Triwulan
                                {{$tw}}</label>
                            <input rows="4" value="{{ old('sasaran', $catatan->{"catatan_kadis_t" . $tw}) }}"
                                type="text" name="catatan_kadis_t{{$tw}}" id="catatan_kadis_t{{$tw}}"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >

                        </div>

                        <input type="hidden" name="triwulan_kolom" value="{{$tw}}">

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="btn btn-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
