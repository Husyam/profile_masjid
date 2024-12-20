@extends('layouts.main')

@section('title', 'Cashout')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<h2>Data Pengeluaran</h2>
<table class="table table-striped table-bordered">
    <thead class="table-danger">
        <tr>
            <th>Tanggal Transaksi</th>
            <th>Jumlah Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cashouts as $cashout)
            <tr>
                <td>{{ $cashout->tanggal_transaksi }}</td>
                <td>Rp{{ number_format($cashout->jumlah_pengeluaran, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>Total: Rp{{ number_format($totalCashout, 2, ',', '.') }}</p>
@endsection
