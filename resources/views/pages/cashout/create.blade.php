@extends('layouts.app')

@section('title', 'Create Uang Keluar')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create kegiatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('cashin.index') }}">Uang Keluar</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add New Uang Keluar</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('cashout.store') }}" method="POST">
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
                                        @error('jenis_pengeluaran')
                                            has-error
                                        @enderror">
                                        <label for="jenis_pengeluaran">Jenis Pengeluaran</label>
                                        <input type="text" name="jenis_pengeluaran" id="jenis_pengeluaran" class="form-control"
                                            value="{{ old('jenis_pengeluaran') }}">
                                        @error('jenis_pengeluaran')
                                            <span class="help-block
                                                text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group
                                        @error('jumlah_pengeluaran')
                                            has-error
                                        @enderror">
                                        <label for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
                                        <input type="number" name="jumlah_pengeluaran" id="jumlah_pengeluaran" class="form-control"
                                            value="{{ old('jumlah_pengeluaran') }}">
                                        @error('jumlah_pengeluaran')
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
