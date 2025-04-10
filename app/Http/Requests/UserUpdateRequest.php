<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user()->can('admin'); // Hanya admin yang bisa mengedit user
    }

    public function rules(): array
    {
        $userId = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->id,
            'password' => 'nullable|string|min:8|confirmed',
            'departement' => ['required', Rule::in($this->getEnumValues('users', 'departement'))],
            'education' => ['required', Rule::in($this->getEnumValues('users', 'education'))],
            'field' => ['required', Rule::in($this->getEnumValues('users', 'field'))],
            'rank' => ['required', Rule::in($this->getEnumValues('users', 'rank'))],
            'eselon' => ['required', Rule::in($this->getEnumValues('users', 'eselon'))],
            'position' => ['required', Rule::in($this->getEnumValues('users', 'position'))],
            'nip' => 'required|string|size:18|unique:users,nip,' . $this->id,
            'tanggal_lahir' => 'required|date',
            'telepon' => 'required|numeric|digits_between:10,19',
            'level' => 'required|integer|min:1',
            'date_spmt' => 'required|date',
            'date_tmt_pangkat' => 'required|date',
            'date_tmt_eselon' => 'required|date',
            'roles' => ['required', Rule::in($this->getEnumValues('users', 'roles'))],
            'leader' => 'nullable|exists:users,id',
        ];
    }

    private function getEnumValues($table, $column)
    {
        $type = DB::select("SHOW COLUMNS FROM {$table} WHERE Field = '{$column}'")[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $enum[] = trim($value, "'");
        }
        return $enum;
    }



}
