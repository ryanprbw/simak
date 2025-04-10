<x-guest-layout>
    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-4">
            <p class="font-bold">Terjadi Kesalahan:</p>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4">
            <p class="font-bold">{{ session('success') }}</p>
        </div>
    @endif
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
        autofocus />
    @error('name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                :value="old('tanggal_lahir')" required />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- NIP -->
        <div class="mt-4">
            <x-input-label for="nip" :value="__('NIP')" />
            <x-text-input id="nip" class="block mt-1 w-full" type="text" name="nip" :value="old('nip')"
                required />
            <x-input-error :messages="$errors->get('nip')" class="mt-2" />
        </div>
        <!-- eselon -->
        <div class="mt-4">
            <x-input-label for="eselon" :value="__('Eselon')" />
            <select id="eselon" name="eselon" class="block mt-1 w-full" required>
                @foreach (['I', 'II', 'III'] as $level)
                    <option value="{{ $level }}" {{ old('eselon') == $level ? 'selected' : '' }}>
                        {{ $level }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('eselon')" class="mt-2" />
        </div>


        <!-- Departemen -->
        <div class="mt-4">
            <x-input-label for="departement" :value="__('Departemen')" />
            <select id="departement" name="departement" class="block mt-1 w-full">
                @foreach (['A', 'B', 'C'] as $dept)
                    <option value="{{ $dept }}">{{ $dept }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('departement')" class="mt-2" />
        </div>

        <!-- Education -->
        <div class="mt-4">
            <x-input-label for="education" :value="__('Education')" />
            <select id="education" name="education" class="block mt-1 w-full">
                @foreach (['High School', 'SD / Sederajat', 'SMP / Sederajat', 'SMA / Sederajat', 'D3', 'S-1', 'S-2', 'S-3'] as $edu)
                    <option value="{{ $edu }}">{{ $edu }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('education')" class="mt-2" />
        </div>

        <!-- Field -->
        <div class="mt-4">
            <x-input-label for="field" :value="__('Field')" />
            <select id="field" name="field" class="block mt-1 w-full">
                @foreach (['Sekretariat', 'Pelayanan Pendaftaran Penduduk', 'Pengelolaan Informasi Administrasi Kependudukan', 'Pelayanan Pencatatan Sipil', 'Pemanfaatan Data dan Inovasi Pelayanan'] as $field)
                    <option value="{{ $field }}">{{ $field }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('field')" class="mt-2" />
        </div>

        <!-- Rank -->
        <div class="mt-4">
            <x-input-label for="rank" :value="__('Rank')" />
            <select id="rank" name="rank" class="block mt-1 w-full">
                @foreach (['4', '5', '6', '7', '8', '9', '10', '11', '12', '13'] as $rank)
                    <option value="{{ $rank }}">{{ $rank }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('rank')" class="mt-2" />
        </div>

        <!-- Position -->

        <div class="mt-4">
            <x-input-label for="position" :value="__('Jabatan')" />
            <select id="position" name="position" class="block mt-1 w-full">
                @foreach ($positions as $pos)
                    <option value="{{ $pos }}">{{ $pos }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('position')" class="mt-2" />
        </div>

        <!-- Leader -->
        <!-- Leader -->
        <div class="mt-4">
            <x-input-label for="leader" :value="__('Leader')" />
            <select id="leader" name="leader" class="block mt-1 w-full">
                <option value="">-- Pilih Leader --</option>
                @foreach ($leaders as $id => $name)
                    <option value="{{ $id }}" {{ old('leader') == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('leader')" class="mt-2" />
        </div>



        <!-- Telepon -->
        <div class="mt-4">
            <x-input-label for="telepon" :value="__('Telepon')" />
            <x-text-input id="telepon" class="block mt-1 w-full" type="text" name="telepon" :value="old('telepon')"
                required />
            <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
        </div>

        <!-- Roles -->
        <div class="mt-4">
            <x-input-label for="roles" :value="__('Role')" />
            <select id="roles" name="roles" class="block mt-1 w-full">
                @foreach (['admin', 'user', 'manager'] as $role)
                    <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('roles')" class="mt-2" />
        </div>

        <!-- Tanggal SPMT -->
        <div class="mt-4">
            <x-input-label for="date_spmt" :value="__('Tanggal SPMT')" />
            <x-text-input id="date_spmt" class="block mt-1 w-full" type="date" name="date_spmt"
                :value="old('date_spmt')" required />
            <x-input-error :messages="$errors->get('date_spmt')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="date_tmt_eselon" :value="__('Tanggal TMT Eselon')" />
            <x-text-input id="date_tmt_eselon" class="block mt-1 w-full" type="date" name="date_tmt_eselon"
                :value="old('date_tmt_eselon')" required />
            <x-input-error :messages="$errors->get('date_tmt_eselon')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="date_tmt_pangkat" :value="__('Tanggal TMT Pangkat')" />
            <x-text-input id="date_tmt_pangkat" class="block mt-1 w-full" type="date" name="date_tmt_pangkat"
                :value="old('date_tmt_pangkat')" required />
            <x-input-error :messages="$errors->get('date_tmt_pangkat')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
