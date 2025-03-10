<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pengguna Baru') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <form method="POST" action="{{ route('profile.store') }}">
            @csrf

            <!-- Nama -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div>

                <x-input-label for="nip" :value="__('NIP')" />
                <x-text-input id="nip" name="nip" type="number" class="mt-1 block w-full" autofocus
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('nip')" />

            </div>
            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
            <div>
                <x-input-label for="tanggal_lahir" :value="__('tanggal_lahir')" />
                <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full" required
                    autocomplete="tanggal_lahir" />
                <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />

            </div>

            <div>

                <x-input-label for="telepon" :value="__('telepon')" />
                <x-text-input id="telepon" name="telepon" type="number" class="mt-1 block w-full" required
                    autocomplete="p" />
                <x-input-error class="mt-2" :messages="$errors->get('telepon')" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('password')" />
            </div>

            <!-- Konfirmasi Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
            </div>

            <!-- Departement (ENUM) -->
            <div class="mt-4">
                <x-input-label for="departement" :value="__('Departement')" />
                <select id="departement" name="departement"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['departement'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('departement')" />
            </div>

            <!-- Education (ENUM) -->
            <div class="mt-4">
                <x-input-label for="education" :value="__('Pendidikan')" />
                <select id="education" name="education" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['education'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('education')" />
            </div>

            <!-- Field (ENUM) -->
            <div class="mt-4">
                <x-input-label for="field" :value="__('Bidang')" />
                <select id="field" name="field" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['field'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('field')" />
            </div>

            <!-- Rank (ENUM) -->
            <div class="mt-4">
                <x-input-label for="leader" :value="__('Nama Atasan')" />
                <select id="leader" name="leader" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <option value="">-- Pilih Atasan --</option>
                    @foreach ($leaders as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('leader')" />
            </div>

            <!-- Rank (ENUM) -->
            <div class="mt-4">
                <x-input-label for="rank" :value="__('Pangkat')" />
                <select id="rank" name="rank" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['rank'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('rank')" />
            </div>
            <!-- Rank (ENUM) -->
            <div class="mt-4">
                <x-input-label for="eselon" :value="__('Eselon')" />
                <select id="eselon" name="eselon" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['eselon'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('eselon')" />
            </div>

            <!-- Position (ENUM) -->
            <div class="mt-4">
                <x-input-label for="position" :value="__('Posisi')" />
                <select id="position" name="position" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['position'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('position')" />
            </div>
            <div>

                <x-input-label for="date_spmt" :value="__('Date SPMT')" />
                <x-text-input id="date_spmt" name="date_spmt" type="date" class="mt-1 block w-full" required
                    autocomplete="date_spmt" />
                <x-input-error class="mt-2" :messages="$errors->get('date_spmt')" />
            </div>

            <div>

                <x-input-label for="date_tmt_pangkat" :value="__('Date TMT Pangkat')" />
                <x-text-input id="date_tmt_pangkat" name="date_tmt_pangkat" type="date" class="mt-1 block w-full"
                    required autocomplete="date_tmt_pangkat" />
                <x-input-error class="mt-2" :messages="$errors->get('date_tmt_pangkat')" />
            </div>
            <div>

                <x-input-label for="date_tmt_eselon" :value="__('Date TMT Eselon')" />
                <x-text-input id="date_tmt_eselon" name="date_tmt_eselon" type="date" class="mt-1 block w-full"
                    required autocomplete="date_tmt_eselon" />
                <x-input-error class="mt-2" :messages="$errors->get('date_tmt_eselon')" />
            </div>
            <div>

                <x-input-label for="level" :value="__('Kelas Jabatan')" />
                <x-text-input id="level" name="level" type="number" class="mt-1 block w-full" required
                    autocomplete="level" />
                <x-input-error class="mt-2" :messages="$errors->get('level')" />
            </div>

            <!-- Roles (ENUM) -->
            <div class="mt-4">
                <x-input-label for="roles" :value="__('Peran')" />
                <select id="roles" name="roles" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach ($enumValues['roles'] as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('roles')" />
            </div>

            <!-- Tombol Simpan -->
            <div class="flex items-center justify-end mt-6">
                <x-primary-button>
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
