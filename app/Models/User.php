<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'tanggal_lahir',
        'education',
        'departement',
        'field',
        'leader',
        'rank',
        'eselon',
        'position',
        'telepon',
        'email',
        'date_spmt',
        'date_tmt_pangkat',
        'date_tmt_eselon',
        'level',
        'password',
        'roles',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'tanggal_lahir' => 'date',
        'date_spmt' => 'date',
        'date_tmt_pangkat' => 'date',
        'date_tmt_eselon' => 'date',
        'telepon' => 'string', // Agar tidak error karena panjang digitnya
    ];

    /**
     * Get the user's hashed password.
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn($value) => $value ? Hash::make($value) : $this->password,
        );
    }
}
