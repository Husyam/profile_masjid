<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatas extends Model
{

    protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'tempat_kegiatan',
        'status_kegiatan',
        'deskripsi_kegiatan',
    ];
}
