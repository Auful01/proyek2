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
                    <a href="{{ route('admin.kategori.barang') }}" class="btn btn-sm btn-outline-dark">Kembali</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-0">
                    <div class="pull-left p-3">Edit Kategori Barang </div>
                </div>
                <div class="card-body p-0">
                    <form class="form theme-form m-0 p-0" action="{{ route('admin.kategori.barang.update', $data->id) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                @if (Session::has('error'))
                                    <div class="col-12">
                                        <div class="alert alert-danger my-3" role="alert">
                                            {{ Session::get('error') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="col">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Kategori</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" value="{{$data->name}}">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1"
                                                    value="1" {{$data->status == 1? 'checked' : null}}>
                                                <label class="form-check-label" for="status1">
                                                    Aktif
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2"
                                                    value="0"  {{$data->status == 0? 'checked' : null}}>
                                                <label class="form-check-label" for="status2">
                                                    Nonaktif
                                                </label>
                                            </div>
                                            @error('status')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-pill btn-primary" type="submit">Submit</button>
                                <input class="btn btn-pill btn-light" type="reset" value="Clear">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
