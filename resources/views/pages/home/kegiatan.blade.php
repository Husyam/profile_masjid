@extends('layouts.main')

@section('title', 'Kegiatan')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<h2>Kegiatan Masjid</h2>
<ul>
    @foreach ($kegiatans as $kegiatan)
        <li>{{ $kegiatan->nama_kegiatan }} - {{ $kegiatan->tanggal_kegiatan }}</li>
    @endforeach
</ul>
@endsection
