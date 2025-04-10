<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255' . $this->route('id')],
            'nip' => ['required', 'string', 'size:18' . $this->route('id')],
            'departement' => ['required', Rule::in(['Dinas Kependudukan dan Pencatatan Sipil'])],
            'education' => [
                'required',
                Rule::in([

                    'SD / Sederajat',
                    'SMP / Sederajat',
                    'SMA / Sederajat',
                    'D3',
                    'S-1',
                    'S-2',
                    'S-3'
                ])
            ],
            'field' => [
                'required',
                Rule::in([
                    'Sekretariat',
                    'Pelayanan Pendaftaran Penduduk',
                    'Pengelolaan Informasi Administrasi Kependudukan',
                    'Pelayanan Pencatatan Sipil',
                    'Pemanfaatan Data dan Inovasi Pelayanan'
                ])
            ],
            'leader' => ['required', Rule::exists('users', 'id')],
            'rank' => ['required', Rule::in(['4', '5', '6', '7', '8', '9', '10', '11', '12', '13'])],
            'eselon' => ['required', Rule::in(['I', 'II', 'III'])],
            'position' => ['required', 'string'], // atau Rule::in([...]) kalau ingin validasi enum
            'tanggal_lahir' => ['required', 'date'],
            'telepon' => ['required', 'digits_between:10,19'],
            'date_spmt' => ['required', 'date'],
            'date_tmt_pangkat' => ['required', 'date'],
            'date_tmt_eselon' => ['required', 'date'],
            'roles' => ['required', Rule::in(['admin', 'user', 'manager'])],
            'password' => ['nullable', 'min:8', 'confirmed'],
            'level' => ['nullable', 'integer', 'min:1', 'max:10'],
        ];
    }


}
