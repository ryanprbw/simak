<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Catatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('catatans.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="catatan_kadis_t1" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Catatan Triwulan 1</label>
                            <input type="text" name="catatan_kadis_t1" id="catatan_kadis_t1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="catatan_kadis_t2" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Catatan Triwulan 2</label>
                            <input type="text" name="catatan_kadis_t2" id="catatan_kadis_t2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="catatan_kadis_t3" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Catatan Triwulan 3</label>
                            <input type="text" name="catatan_kadis_t3" id="catatan_kadis_t3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="catatan_kadis_t4" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Catatan Triwulan 4</label>
                            <input type="text" name="catatan_kadis_t4" id="catatan_kadis_t4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>

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
