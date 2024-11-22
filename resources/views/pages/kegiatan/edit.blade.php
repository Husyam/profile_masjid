@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Kegiatan</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Kegiatan</h2>
                <div class="card">
                    <form action="{{ route('kegiatan.update', $kegiatan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{--  'nama_kegiatan',
                        'tanggal_kegiatan',
                        'waktu_kegiatan',
                        'tempat_kegiatan',
                        'status_kegiatan',
                        'deskripsi_kegiatan', --}}
                        <div class="card-header">
                            <h4>Edit Kegiatan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group
                                @error('nama_kegiatan')
                                    has-error
                                @enderror">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control"
                                    value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}">
                                @error('nama_kegiatan')
                                    <span class="help-block
                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                                @error('tanggal_kegiatan')
                                    has-error
                                @enderror">
                                <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                                <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control"
                                    value="{{ old('tanggal_kegiatan', $kegiatan->tanggal_kegiatan) }}">
                                @error('tanggal_kegiatan')
                                    <span class="help-block
                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                                @error('waktu_kegiatan')
                                    has-error
                                @enderror">
                                <label for="waktu_kegiatan">Waktu Kegiatan</label>
                                <input type="time" name="waktu_kegiatan" id="waktu_kegiatan" class="form-control"
                                    value="{{ old('waktu_kegiatan', $kegiatan->waktu_kegiatan) }}">
                                @error('waktu_kegiatan')
                                    <span class="help-block
                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                                @error('tempat_kegiatan')
                                    has-error
                                @enderror">
                                <label for="tempat_kegiatan">Tempat Kegiatan</label>
                                <input type="text" name="tempat_kegiatan" id="tempat_kegiatan" class="form-control"
                                    value="{{ old('tempat_kegiatan', $kegiatan->tempat_kegiatan) }}">
                                @error('tempat_kegiatan')
                                    <span class="help-block

                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                                @error('status_kegiatan')
                                    has-error
                                @enderror">
                                <label for="status_kegiatan">Status Kegiatan</label>
                                <input type="text" name="status_kegiatan" id="status_kegiatan" class="form-control"
                                    value="{{ old('status_kegiatan', $kegiatan->status_kegiatan) }}">
                                @error('status_kegiatan')
                                    <span class="help-block
                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group
                                @error('deskripsi_kegiatan')
                                    has-error
                                @enderror">
                                <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                                <textarea name="deskripsi_kegiatan" id="deskripsi_kegiatan" class="form-control"
                                    value="{{ old('deskripsi_kegiatan', $kegiatan->deskripsi_kegiatan) }}"></textarea>
                                @error('deskripsi_kegiatan')
                                    <span class="help-block
                                        text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
