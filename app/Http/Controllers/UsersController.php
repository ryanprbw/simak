<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(ProfileUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nip' => $request->nip,
            'departement' => $request->departement,
            'education' => $request->education,
            'field' => $request->field,
            'leader' => $request->leader,
            'rank' => $request->rank,
            'eselon' => $request->eselon,
            'position' => $request->position,
            'tanggal_lahir' => $request->tanggal_lahir,
            'telepon' => $request->telepon,
            'date_spmt' => $request->date_spmt,
            'date_tmt_pangkat' => $request->date_tmt_pangkat,
            'date_tmt_eselon' => $request->date_tmt_eselon,
            'roles' => $request->roles,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password
        ]);

        return redirect()->route('users.edit', $id)->with('success', 'Profil berhasil diperbarui.');
    }
}
