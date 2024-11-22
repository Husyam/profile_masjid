@extends('layouts.app')

@section('title', 'Create kegiatan')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create kegiatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('kegiatan.index') }}">kegiatan</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add New kegiatan</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kegiatan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group
                                        @error('nama_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="nama_kegiatan">Nama kegiatan</label>
                                        <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control"
                                            value="{{ old('nama_kegiatan') }}">
                                        @error('nama_kegiatan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('tanggal_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="tanggal_kegiatan">Tanggal kegiatan</label>
                                        <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control"
                                            value="{{ old('tanggal_kegiatan') }}">
                                        @error('tanggal_kegiatan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('waktu_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="waktu_kegiatan">Waktu kegiatan</label>
                                        <input type="time" name="waktu_kegiatan" id="waktu_kegiatan" class="form-control"
                                            value="{{ old('waktu_kegiatan') }}">
                                        @error('waktu_kegiatan')
                                            <span class="help-block

                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('tempat_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="tempat_kegiatan">Tempat kegiatan</label>
                                        <input type="text" name="tempat_kegiatan" id="tempat_kegiatan" class="form-control"
                                            value="{{ old('tempat_kegiatan') }}">
                                        @error('tempat_kegiatan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('status_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="status_kegiatan">Status kegiatan</label>
                                        <input type="text" name="status_kegiatan" id="status_kegiatan" class="form-control"
                                            value="{{ old('status_kegiatan') }}">
                                        @error('status_kegiatan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('deskripsi_kegiatan')
                                            has-error
                                        @enderror">
                                        <label for="deskripsi_kegiatan">Deskripsi kegiatan</label>
                                        <textarea name="deskripsi_kegiatan" id="deskripsi_kegiatan" class="form-control"
                                            rows="5">{{ old('deskripsi_kegiatan') }}</textarea>
                                        @error('deskripsi_kegiatan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
