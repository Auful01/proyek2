@extends('dashboard.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6 main-header">
                        <h2>Barang</h2>
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
                    <a href="{{ route('penjual.barang') }}" class="btn btn-sm btn-outline-dark">Kembali</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-0">
                    <div class="pull-left p-3">Detail Barang</div>
                </div>
                <div class="card-body p-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Kategori</div>
                                            <div class="col-md-8"><strong>{{$data->junk->junk_category->name}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Nama Barang</div>
                                            <div class="col-md-8"><strong>{{$data->junk->name}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Harga per Berat (kg)</div>
                                            <div class="col-md-8"><strong>{{$data->junk->price}} / {{$data->junk->weight}} kg</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Berat (kg)</div>
                                            <div class="col-md-8"><strong>{{$data->weight}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Alamat</div>
                                            <div class="col-md-8"><strong>{{$data->address}}, {{$data->village}}, {{$data->district}}, {{$data->city}}, {{$data->province}}</strong></div>
                                        </div>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
