<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinerjaUtama extends Model
{
    protected $fillable = ['kinerja_utama']; 

    // Relasi dengan model IndikatorKinerja
    public function indikatorKinerjas()
    {
        return $this->hasMany(IndikatorKinerja::class);
    }
}
