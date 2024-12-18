<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cashin extends Model
{
    protected $fillable = [
        'tanggal_transaksi',
        'jenis_penerimaan',
        'diterima_dari',
        'jumlah',
        // 'total',

    ];

    protected $dates = ['tanggal_transaksi'];

}
