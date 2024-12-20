@extends('layouts.main')

@section('title', 'Cashin')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<h2>Data Pemasukan</h2>
<table class="table table-striped table-bordered">
    <thead class="table-success">
        <tr>
            <th>Tanggal Transaksi</th>
            <th>Jumlah Pemasukan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cashins as $cashin)
            <tr>
                <td>{{ $cashin->tanggal_transaksi }}</td>
                <td>Rp{{ number_format($cashin->jumlah, 2, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>Total: Rp{{ number_format($totalCashin, 2, ',', '.') }}</p>
@endsection
