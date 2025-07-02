<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama',
        'jenis',
        'nip',
        'nilai',
        'photo',
        'triwulan', 
    ];

    public static function jenisOptions()
    {
        return [
            'ASN' => 'ASN',
            'Non-ASN' => 'Non-ASN',
        ];
    }

    public static function isValidJenis($jenis)
    {
        return in_array($jenis, array_keys(self::jenisOptions()));
    }

    public static function rules($id = null)
    {
        return [
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|in:' . implode(',', array_keys(self::jenisOptions())),
            'nip' => 'nullable|required_if:jenis,ASN|string|max:255|unique:pegawais,nip,' . $id,
            'nilai' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'triwulan' => 'required|integer|min:1|max:4'
            
        ];
    }
}
