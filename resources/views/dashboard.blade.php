<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">


                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">NIP</th>
                            <th class="px-4 py-3">SKPD</th>
                            <th class="px-4 py-3">Bidang</th>
                            <th class="px-4 py-3">Jabatan</th>
                            <th class="px-4 py-3">Pendidikan</th>
                            <th class="px-4 py-3">Kelas Jabatan</th>
                            <th class="px-4 py-3">Eselon</th>
                            <th class="px-4 py-3">Tgl Lahir</th>
                            <th class="px-4 py-3">Telepon</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Peran</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-4 py-2">{{ $user->id }}</td>
                                <td class="px-4 py-2">{{ $user->name }}</td>
                                <td class="px-4 py-2">{{ $user->nip }}</td>
                                <td class="px-4 py-2">{{ $user->departement }}</td>
                                <td class="px-4 py-2">{{ $user->field }}</td>
                                <td class="px-4 py-2">{{ $user->position }}</td>
                                <td class="px-4 py-2">{{ $user->education }}</td>
                                <td class="px-4 py-2">{{ $user->rank }}</td>
                                <td class="px-4 py-2">{{ $user->eselon }}</td>
                                <td class="px-4 py-2">
                                    {{ \Carbon\Carbon::parse($user->tanggal_lahir)->format('d-m-Y') }}</td>
                                <td class="px-4 py-2">+62{{ $user->telepon }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2">{{ $user->roles }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="13" class="px-4 py-4 text-center text-gray-500">Tidak ada data pengguna
                                </td>
                            </tr>
                        @endforelse
                    </tbody>


                </table>
            </div>

        </div>
    </div>
</x-app-layout>
