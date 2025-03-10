<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserStoreRequest extends FormRequest
{
    /**
     * Tentukan apakah pengguna diizinkan membuat user baru.
     */
    public function authorize(): bool
    {
        return auth()->user()->can('admin'); // Hanya admin yang bisa menambahkan user
    }

    /**
     * Aturan validasi untuk menyimpan user baru.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'departement' => ['required', Rule::in($this->getEnumValues('users', 'departement'))],
            'education' => ['required', Rule::in($this->getEnumValues('users', 'education'))],
            'field' => ['required', Rule::in($this->getEnumValues('users', 'field'))],
            'rank' => ['required', Rule::in($this->getEnumValues('users', 'rank'))],
            'eselon' => ['required', Rule::in($this->getEnumValues('users', 'eselon'))],
            'position' => ['required', Rule::in($this->getEnumValues('users', 'position'))],
            'nip' => 'required|numeric|digits_between:10,19|unique:users,nip',
            'tanggal_lahir' => 'required|date',
            'telepon' => 'required|numeric|digits_between:10,19',
            'level' => 'required|integer|min:1',
            'date_spmt' => 'required|date',
            'date_tmt_pangkat' => 'required|date',
            'date_tmt_eselon' => 'required|date',
            'roles' => ['required', Rule::in($this->getEnumValues('users', 'roles'))],
            'leader' => 'nullable|exists:users,id', // Validasi leader harus ada di tabel users
        ];
    }

    /**
     * Fungsi untuk mengambil nilai ENUM dari database.
     */
    private function getEnumValues($table, $column)
    {
        $enumValues = DB::select("SHOW COLUMNS FROM $table WHERE Field = ?", [$column]);
        preg_match("/^enum\((.*)\)$/", $enumValues[0]->Type, $matches);
        return explode(",", str_replace("'", "", $matches[1]));
    }
}
