@extends('layouts.main')

@section('title', 'Cashin')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<h2>Data Pemasukan</h2>
<ul>
    @foreach ($cashins as $cashin)
        <li>{{ $cashin->tanggal_transaksi }} - Rp{{ number_format($cashin->jumlah, 2, ',', '.') }}</li>
    @endforeach
</ul>
<p>Total: Rp{{ number_format($totalCashin, 2, ',', '.') }}</p>
@endsection
