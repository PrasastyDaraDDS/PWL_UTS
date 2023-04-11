@extends('layouts.template', ['title' => 'roti'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Roti</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Roti 🍞</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($roti) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->nama : old('nama') }}" name="nama" type="text" />
                            @error('nama')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <input class="form-control @error('merk') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->merk : old('merk') }}" name="merk" type="text" />
                            @error('merk')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Rasa</label>
                            <input class="form-control @error('rasa') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->rasa : old('rasa') }}" name="rasa" type="text" />
                            @error('rasa')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Kadalursa</label>
                            <input class="form-control @error('kadaluarsa') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->kadalursa : old('kadaluarsa') }}" name="kadaluarsa" type="date" />
                            @error('kadaluarsa')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Berat(g)</label>
                            <input class="form-control @error('berat') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->berat : old('berat') }}" name="berat"
                                type="text" />
                            @error('berat')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->harga : old('harga') }}" name="harga" type="text" />
                            @error('harga')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Kuantitas</label>
                            <input class="form-control @error('qty') is-invalid @enderror"
                                value="{{ isset($roti) ? $roti->qty : old('qty') }}" name="qty" type="text" />
                            @error('qty')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- /.card-body -->

                        <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
