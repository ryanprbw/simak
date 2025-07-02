<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndikatorKinerja extends Model
{
    protected $fillable = ['indikator_kinerja', 'target', 'realisasi']; // Hapus 'kinerja_utama_id' dari $fillable

    // Relasi dengan model KinerjaUtama
    public function kinerjaUtama()
    {
        return $this->belongsTo(KinerjaUtama::class);
    }
}
