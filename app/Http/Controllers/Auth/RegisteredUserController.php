<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $leaders = User::pluck('name', 'id');
        $positions = $this->getEnumValues('users', 'position'); // ✅ tambahkan baris ini
        return view('auth.register', compact('leaders', 'positions')); // ✅ kirimkan ke view$
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nip' => ['required', 'string', 'size:18', 'unique:users'],
            'departement' => ['required', 'in:A,B,C'], // ENUM dari database
            'education' => ['required', 'in:High School,SD / Sederajat,SMP / Sederajat,SMA / Sederajat,D3,S-1,S-2,S-3'],
            'field' => ['required', 'in:Sekretariat,Pelayanan Pendaftaran Penduduk,Pengelolaan Informasi Administrasi Kependudukan,Pelayanan Pencatatan Sipil,Pemanfaatan Data dan Inovasi Pelayanan'],
            'leader' => ['nullable', 'exists:users,id'],
            'rank' => ['required', 'in:4,5,6,7,8,9,10,11,12,13'],
            'eselon' => ['required', 'in:I,II,III'],
            'position' => ['required', 'in:Kepala Bidang,Kepala Dinas Kependudukan dan Pencatatan Sipil,Sekretaris Dinas Kependudukan dan Pencatatan Sipil,Kepala Bidang Pelayanan Pendaftaran Penduduk,Kepala Bidang Pengelolaan Informasi Administrasi Kependudukan,Kepala Bidang Pelayanan Pencatatan Sipil,Kepala Bidang Pemanfaatan Data dan Inovasi Pelayanan,Kasubbag Umum dan Kepegawaian,Kasubbag Keuangan,Kasubbag Perencanaan dan Pelaporan,JFT Analis Kebijakan,Pengadministrasi Kependudukan,Pranata Komputer Pelaksana,Bendahara (Pengeluaran),Analis Perencanaan, Evaluasi, dan Pelaporan,Analis Kependudukan dan Pencatatan Sipil,Ahli Pertama - Pranata Komputer,Pengawas Kependudukan,JF Pranata Komputer Terampil,Analis Kebijakan Pertama,Administrator Database Kependudukan'],
            'tanggal_lahir' => ['required', 'date'],
            'telepon' => ['required', 'digits_between:10,19'], // Sesuai tipe BIGINT
            'date_spmt' => ['required', 'date'],
            'date_tmt_pangkat' => ['required', 'date'],
            'date_tmt_eselon' => ['required', 'date'],
            'roles' => ['required', 'in:admin,user,manager'],
            'level' => ['nullable', 'integer', 'min:1', 'max:10'], // Level default 4

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
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
            'level' => $request->level ?? 4, // Default level 4 jika tidak diisi
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
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
