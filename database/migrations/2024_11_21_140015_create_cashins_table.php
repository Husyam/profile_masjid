<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cashins', function (Blueprint $table) {
            $table->id();
            //tanggal transaksi
            $table->date('tanggal_transaksi');
            //jenis penerimaan
            $table->string('jenis_penerimaan');
            //diterima dari
            $table->string('diterima_dari');
            //jumlah
            $table->integer('jumlah');
            //total
            // $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashins');
    }
};
