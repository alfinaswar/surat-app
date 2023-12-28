<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSurat extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_surat',
        'klasifikasi',
        'lampiran',
        'perihal',
        'id_polisi',
        'pangkat',
        'nrp',
        'jabatan',
        'keterangan',
        'tanggal',
        'provinsi',
        'kota',
    ];
}
