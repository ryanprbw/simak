<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <!-- Email -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <!-- NIP -->
    <div>
        <x-input-label for="nip" :value="__('NIP')" />
        <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full" :value="old('nip', $user->nip)"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('nip')" />
    </div>

    <!-- Departemen -->
    <div>
        <x-input-label for="departement" :value="__('Dinas')" />
        <select id="departement" name="departement"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['Dinas Kependudukan dan Pencatatan Sipil'] as $dept)
                <option value="{{ $dept }}" {{ $user->departement == $dept ? 'selected' : '' }}>
                    {{ $dept }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('departement')" />
    </div>

    <!-- Education -->
    <div>
        <x-input-label for="education" :value="__('Pendidikan Terakhir')" />
        <select id="education" name="education"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['SD / Sederajat', 'SMP / Sederajat', 'SMA / Sederajat', 'D3', 'S-1', 'S-2', 'S-3'] as $edu)
                <option value="{{ $edu }}" {{ $user->education == $edu ? 'selected' : '' }}>{{ $edu }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('education')" />
    </div>

    <!-- Field -->
    <div>
        <x-input-label for="field" :value="__('Bidang')" />
        <select id="field" name="field"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['Sekretariat', 'Pelayanan Pendaftaran Penduduk', 'Pengelolaan Informasi Administrasi Kependudukan', 'Pelayanan Pencatatan Sipil', 'Pemanfaatan Data dan Inovasi Pelayanan'] as $field)
                <option value="{{ $field }}" {{ $user->field == $field ? 'selected' : '' }}>{{ $field }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('field')" />
    </div>

    <!-- Rank -->
    <div>
        <x-input-label for="rank" :value="__('Kelas Jabatan')" />
        <select id="rank" name="rank"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['4', '5', '6', '7', '8', '9', '10', '11', '12', '13'] as $rank)
                <option value="{{ $rank }}" {{ $user->rank == $rank ? 'selected' : '' }}>{{ $rank }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('rank')" />
    </div>

    <!-- Position -->
    <div>
        <x-input-label for="position" :value="__('Posisi / Jabatan')" />
        <select id="position" name="position"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach ($positions as $pos)
                <option value="{{ $pos }}" {{ old('position', $user->position) == $pos ? 'selected' : '' }}>
                    {{ $pos }}
                </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('position')" />
    </div>

    <!-- Tanggal Lahir -->
    <div>
        <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
        <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full"
            value="{{ old('tanggal_lahir', $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('Y-m-d') : '') }}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
    </div>

    <!-- Telepon -->
    <div>
        <x-input-label for="telepon" :value="__('Telepon')" />
        <div class="flex rounded-md shadow-sm">
            <span
                class="inline-flex items-center px-3 rounded-l-md border border-r-0 bg-gray-100 text-gray-500 text-sm">
                +62
            </span>
            <x-text-input id="telepon" name="telepon" type="text"
                class="mt-1 block w-full rounded-l-none border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                :value="old('telepon', $user->telepon)" required />
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('telepon')" />
    </div>

    <!-- Roles -->
    <div>
        <x-input-label for="roles" :value="__('Role')" />
        <select id="roles" name="roles"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['admin', 'user', 'manager'] as $role)
                <option value="{{ $role }}" {{ $user->roles == $role ? 'selected' : '' }}>
                    {{ ucfirst($role) }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('roles')" />
    </div>

    <!-- Eselon -->
    <div>
        <x-input-label for="eselon" :value="__('Eselon')" />
        <select id="eselon" name="eselon"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach (['I', 'II', 'III', 'IV', 'Staff'] as $level)
                <option value="{{ $level }}" {{ $user->eselon == $level ? 'selected' : '' }}>
                    {{ $level }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('eselon')" />
    </div>

    <!-- Tanggal SPMT -->
    <div>
        <x-input-label for="date_spmt" :value="__('Tanggal SPMT')" />
        <x-text-input id="date_spmt" name="date_spmt" type="date" class="mt-1 block w-full"
            value="{{ old('date_spmt', $user->date_spmt ? \Carbon\Carbon::parse($user->date_spmt)->format('Y-m-d') : '') }}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('date_spmt')" />
    </div>

    <!-- Tanggal TMT Pangkat -->
    <div>
        <x-input-label for="date_tmt_pangkat" :value="__('Tanggal TMT Pangkat')" />
        <x-text-input id="date_tmt_pangkat" name="date_tmt_pangkat" type="date" class="mt-1 block w-full"
            value="{{ old('date_tmt_pangkat', $user->date_tmt_pangkat ? \Carbon\Carbon::parse($user->date_tmt_pangkat)->format('Y-m-d') : '') }}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('date_tmt_pangkat')" />
    </div>

    <!-- Tanggal TMT Eselon -->
    <div>
        <x-input-label for="date_tmt_eselon" :value="__('Tanggal TMT Eselon')" />
        <x-text-input id="date_tmt_eselon" name="date_tmt_eselon" type="date" class="mt-1 block w-full"
            value="{{ old('date_tmt_eselon', $user->date_tmt_eselon ? \Carbon\Carbon::parse($user->date_tmt_eselon)->format('Y-m-d') : '') }}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('date_tmt_eselon')" />
    </div>

    <!-- Leader -->
    <div>
        <x-input-label for="leader" :value="__('Pimpinan')" />
        <select id="leader" name="leader"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="">-- Pilih Leader --</option>
            @foreach ($leaders as $id => $name)
                <option value="{{ $id }}" {{ old('leader', $user->leader) == $id ? 'selected' : '' }}>
                    {{ $name }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('leader')" />
    </div>

    <!-- Level -->
    <div>
        <x-input-label for="level" :value="__('Level')" />
        <x-text-input id="level" name="level" type="number" min="1" max="10"
            class="mt-1 block w-full" :value="old('level', $user->level ?? 4)" />
        <x-input-error class="mt-2" :messages="$errors->get('level')" />
    </div>

    <!-- Submit Button -->
    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
