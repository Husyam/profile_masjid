@extends('layouts.main')

@section('title', 'Home')
@section('masjid-name', 'Masjid Agung Palembang')
@section('masjid-address', 'Jl. Sudirman No. 45, Palembang')

@section('main')
<div class="row align-items-center">
    <!-- Kolom Gambar -->
    <div class="col-md-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Masjid_Agung_Palembang.jpg/440px-Masjid_Agung_Palembang.jpg" class="img-fluid rounded" alt="Masjid Agung Palembang">
    </div>

    <!-- Kolom Deskripsi -->
    <div class="col-md-6">
        <h2>Selamat Datang di Masjid Agung Palembang</h2>
        <p>Masjid Agung Palembang adalah salah satu ikon kebanggaan Kota Palembang yang memiliki nilai sejarah dan arsitektur yang menakjubkan. Terletak di pusat kota, masjid ini menjadi tempat ibadah sekaligus tujuan wisata religi bagi masyarakat lokal maupun wisatawan.</p>
        <p>Dengan fasilitas yang lengkap dan suasana yang nyaman, masjid ini juga sering menjadi pusat kegiatan keagamaan, seperti pengajian, kajian Islam, dan acara keagamaan lainnya.</p>
    </div>
</div>
@endsection
