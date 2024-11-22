@extends('layouts.app')

@section('title', 'Kegiatan Masjid')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kegiatan</h1>
                <div class="section-header-button">
                    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Kegiatan</a></div>
                    <div class="breadcrumb-item">All Kegiatan</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('kegiatan.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table table-hover">
                                        <tr>
                                            <th>Name Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Waktu Kegiatan</th>
                                            <th>Tempat Kegiatan</th>
                                            <th>Deskripsi Kegiatan</th>
                                            <th>Status Kegiatan</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($kegiatans as $item)
                                            <tr>
                                                <td>{{ $item->nama_kegiatan }}</td>
                                                <td>{{ $item->tanggal_kegiatan }}</td>
                                                <td>{{ $item->waktu_kegiatan }}</td>
                                                <td>{{ $item->tempat_kegiatan }}</td>
                                                <td>{{ $item->deskripsi_kegiatan }}</td>
                                                <td>{{ $item->status_kegiatan }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" class="ml-2" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
