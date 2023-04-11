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
                    <h3 class="card-title">Daftar Roti 🍞</h3>

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
                    
                        <a href="{{ url('roti/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                        <div class="d-flex row" style="width: 100%;justify-content: space-between;align-items: center;">
                            <form action="/roti" class="col-md-4" style="padding: 0">
                                @csrf
                                <div class="input-group input-group-sm ">
                                    <input type="text" name="search" class="form-control input-sm " placeholder="Cari Roti">
                                    <button class="input-group-text input-sm" id="basic-addon2" type="submit">
                                        <i class="fa fa-search" style="font-size:16px"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="/logout" class="btn btn-danger">
                            Logout</a>
                        </div>
                        <div class="mb-3"></div>
                    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Merk</th>
                                <th>Rasa</th>
                                <th>Kadaluarsa</th>
                                <th>Berat(g)</th>
                                <th>Harga</th>
                                <th>Kuantitas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($roti->count() > 0)
                                @foreach ($roti as $i => $r)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{ $r->nama }}</td>
                                        <td>{{ $r->merk }}</td>
                                        <td>{{ $r->rasa }}</td>
                                        <td>{{ $r->kadaluarsa }}</td>
                                        <td>{{ $r->berat }} g</td>
                                        <td>{{ $r->harga }}</td>
                                        <td>{{ $r->qty }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="row justify-content-center">

                                                <a href="{{ url('/roti/' . $r->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2">Edit</a>

                                                <form method="POST" action="{{ url('/roti/' . $r->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="mt-4" style="display: flex; justify-content: center; flex-direction: column-reverse">
                        {{ $roti->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
