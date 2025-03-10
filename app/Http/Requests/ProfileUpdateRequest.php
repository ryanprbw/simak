<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'nip' => [
                'required',
                'numeric',
                'digits_between:10,19',
                Rule::unique(User::class, 'nip')->ignore($this->user()->id),
            ],
            'departement' => ['required', Rule::in(['A', 'B', 'C'])],
            'education' => ['required', Rule::in(['High School', 'SD / Sederajat', 'SMP / Sederajat', 'SMA / Sederajat', 'D3', 'S-1', 'S-2', 'S-3'])],
            'field' => ['required', Rule::in(['Sekretariat', 'Pelayanan Pendaftaran Penduduk', 'Pengelolaan Informasi Administrasi Kependudukan', 'Pelayanan Pencatatan Sipil', 'Pemanfaatan Data dan Inovasi Pelayanan'])],
            'rank' => ['required', Rule::in(['4', '5', '6', '7', '8', '9', '10', '11', '12', '13'])],
            'eselon' => ['required', Rule::in(['I', 'II', 'III'])],
            'position' => [
                'required',
                Rule::in([
                    'Kepala Bidang',
                    'Kepala Dinas Kependudukan dan Pencatatan Sipil',
                    'Sekretaris Dinas Kependudukan dan Pencatatan Sipil',
                    'Kepala Bidang Pelayanan Pendaftaran Penduduk',
                    'Kepala Bidang Pengelolaan Informasi Administrasi Kependudukan',
                    'Kepala Bidang Pelayanan Pencatatan Sipil',
                    'Kepala Bidang Pemanfaatan Data dan Inovasi Pelayanan',
                    'Kasubbag Umum dan Kepegawaian',
                    'Kasubbag Keuangan',
                    'Kasubbag Perencanaan dan Pelaporan',
                    'JFT Analis Kebijakan',
                    'Pengadministrasi Kependudukan',
                    'Pranata Komputer Pelaksana',
                    'Bendahara (Pengeluaran)',
                    'Analis Perencanaan, Evaluasi, dan Pelaporan',
                    'Analis Kependudukan dan Pencatatan Sipil',
                    'Ahli Pertama - Pranata Komputer',
                    'Pengawas Kependudukan',
                    'JF Pranata Komputer Terampil',
                    'Analis Kebijakan Pertama',
                    'Administrator Database Kependudukan'
                ])
            ],
            'tanggal_lahir' => ['required', 'date'],
            'telepon' => ['required', 'numeric', 'digits_between:10,19'],
            'date_spmt' => ['required', 'date'],
            'date_tmt_pangkat' => ['required', 'date'],
            'date_tmt_eselon' => ['required', 'date'],
            'roles' => ['required', Rule::in(['admin', 'user', 'manager'])],
            'leader' => ['nullable', 'exists:users,id'],
        ];
    }
}
