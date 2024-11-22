@extends('layouts.app')

@section('title', 'Uang Masuk')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Uang Masuk</h1>
                <div class="section-header-button">
                    <a href="{{ route('cashin.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Uang Masuk</a></div>
                    <div class="breadcrumb-item">Uang Masuk</div>
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
                                    <form method="GET" action="{{ route('cashin.index') }}">
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
                                            <th>Tanggal Transaksi</th>
                                            <th>Jenis Penerimaan</th>
                                            <th>Diterima Dari</th>
                                            <th>Jumlah</th>
                                            {{-- <th>Total</th> --}}
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($cashins as $item)
                                            <tr>
                                                <td>{{ $item->tanggal_transaksi }}</td>
                                                <td>{{ $item->jenis_penerimaan }}</td>
                                                <td>{{ $item->diterima_dari }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                {{-- <td>{{ $item->total }}</td> --}}
                                                <td>
                                                    <div class="d-flex justify-content-center">

                                                        <form action="{{ route('cashin.destroy', $item->id) }}" method="POST" class="ml-2" enctype="multipart/form-data">
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
                                    {{-- Menampilkan total jumlah yang terkumpul --}}
                                    <div class="mt-3">
                                        <h5>Total Terkumpul: <strong>{{ number_format($totalRevenue, 2, ',', '.') }}</strong></h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
