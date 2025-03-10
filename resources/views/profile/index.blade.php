<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>


    <a href="{{ route('profile.create') }}" class="btn btn-primary">Tambah User</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Departement</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->departement }}</td>
                    <td>{{ $user->roles }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
