@extends('layouts.main')

@section('title', 'Cashout')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<h2>Data Pengeluaran</h2>
<ul>
    @foreach ($cashouts as $cashout)
        <li>{{ $cashout->tanggal_transaksi }} - Rp{{ number_format($cashout->jumlah, 2, ',', '.') }}</li>
    @endforeach
</ul>
<p>Total: Rp{{ number_format($totalCashout, 2, ',', '.') }}</p>
@endsection
