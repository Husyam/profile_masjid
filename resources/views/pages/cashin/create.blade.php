@extends('layouts.app')

@section('title', 'Create Uang Masuk')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create kegiatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('cashin.index') }}">Uang Masuk</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add New Uang Masuk</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('cashin.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group
                                        @error('tanggal_transaksi')
                                            has-error
                                        @enderror">
                                        <label for="tanggal
                                            _transaksi">Tanggal Transaksi</label>
                                        <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control"
                                            value="{{ old('tanggal_transaksi') }}">
                                        @error('tanggal_transaksi')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('jenis_penerimaan')
                                            has-error
                                        @enderror">
                                        <label for="jenis_penerimaan">Jenis Penerimaan</label>
                                        <input type="text" name="jenis_penerimaan" id="jenis_penerimaan" class="form-control"
                                            value="{{ old('jenis_penerimaan') }}">
                                        @error('jenis_penerimaan')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('diterima_dari')
                                            has-error
                                        @enderror">
                                        <label for="diterima_dari">Diterima Dari</label>
                                        <input type="text" name="diterima_dari" id="diterima_dari" class="form-control"
                                            value="{{ old('diterima_dari') }}">
                                        @error('diterima_dari')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('jumlah')
                                            has-error
                                        @enderror">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" name="jumlah" id="jumlah" class="form-control"
                                            value="{{ old('jumlah') }}">
                                        @error('jumlah')
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
