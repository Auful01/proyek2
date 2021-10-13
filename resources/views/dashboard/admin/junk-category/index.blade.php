@extends('dashboard.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6 main-header">
                        <h2>Kategori Barang</h2>
                        <h6 class="mb-0">
                            @if (auth()->user()->role == 'adm')
                                Admin Panel
                            @elseif (auth()->user()->role == 'pgl')
                                Pengepul Panel
                            @elseif (auth()->user()->role == 'slr')
                                Penjual Panel
                            @endif
                        </h6>
                    </div>
                    <div class="col-lg-6 breadcrumb-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                @if (auth()->user()->role == 'adm')
                                    <a href="{{ route('admin.dashboard') }}"><i class="pe-7s-home"></i></a>
                                @elseif (auth()->user()->role == 'pgl')
                                    <a href="{{ route('pengepul.dashboard') }}"><i class="pe-7s-home"></i></a>
                                @elseif (auth()->user()->role == 'slr')
                                    <a href="{{ route('penjual.dashboard') }}"><i class="pe-7s-home"></i></a>
                                @endif
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <a href="{{ route('admin.kategori.barang.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                </div>
                @if (Session::has('error'))
                    <div class="col-12 my-3">
                        <div class="col-12">
                            <div class="alert alert-danger my-3" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        </div>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="col-12 my-3">
                        <div class="col-12">
                            <div class="alert alert-success my-3" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header p-0">
                    <div class="pull-left p-3">
                        Data Kategori Barang
                    </div>
                </div>
                <div class="card-body p-3">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap mt-5"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">No.</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @if ($item->status)
                                        <span class="badge badge-pill badge-success">Aktif</span>
                                        @else
                                        <span class="badge badge-pill badge-danger">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <center>
                                            <a href="{{ route('admin.kategori.barang.edit', $item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                            <form style="display: inline-block;" id="myForm" action="{{ route('admin.kategori.barang.destroy', $item->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <a href="#" onclick="document.getElementById('myForm').submit();" class="btn btn-sm btn-danger">Hapus</a>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
