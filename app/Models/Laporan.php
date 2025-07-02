<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'sasaran',
        'indikator',
        'target',
        'satuan',
        'target_t1',
        'realisasi_t1',
        'persentasi_t1',
        'target_t2',
        'realisasi_t2',
        'persentasi_t2',
        'target_t3',
        'realisasi_t3',
        'persentasi_t3',
        'target_t4',
        'realisasi_t4',
        'persentasi_t4',
        'sasaran2',
        'indikator2',
        'realisasi_ctt_t1',
        'faktor_pendorong_t1',
        'faktor_penghambat_t1',
        'catatan_kadis_t1',
        'realisasi_ctt_t2',
        'faktor_pendorong_t2',
        'faktor_penghambat_t2',
        'catatan_kadis_t2',
        'realisasi_ctt_t3',
        'faktor_pendorong_t3',
        'faktor_penghambat_t3',
        'catatan_kadis_t3',
        'realisasi_ctt_t4',
        'faktor_pendorong_t4',
        'faktor_penghambat_t4',
        'catatan_kadis_t4',
        'updated_at',
        'created_at'
    ];

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}





}
