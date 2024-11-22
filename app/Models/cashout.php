<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cashout extends Model
{
    protected $table = 'cashouts';
    protected $fillable = ['tanggal_transaksi', 'jenis_pengeluaran', 'jumlah_pengeluaran'];
}
