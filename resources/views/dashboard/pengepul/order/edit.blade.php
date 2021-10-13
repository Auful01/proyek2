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
                    <div class="pull-left p-3">Edit Data Barang</div>
                </div>
                <div class="card-body p-0">
                    <form class="form theme-form m-0 p-0" action="{{ route('pengepul.order.update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
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
                                        <label class="col-sm-3 col-form-label">Nama Penjual</label>
                                        <div class="col-sm-9">
                                            <label for="">{{ $data->user_junk->user->name }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Penjual</label>
                                        <div class="col-sm-9">
                                            <label for="">{{ $data->user_junk->user->address }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <label for="">{{ $data->user_junk->junk->junk_category->name }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Harga / Berat(Kg)</label>
                                        <div class="col-sm-9">
                                            <label for="">{{$data->user_junk->junk->price}} / {{ $data->user_junk->junk->weight }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Total Berat</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="weight" placeholder="Masukkan total berat" value="{{$data->weight}}">
                                            @error('weight')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Total Harga</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="total" placeholder="Masukkan total harga" value="{{$data->total}}">
                                            @error('total')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1"
                                                    value="WAITING" {{$data->status == 'WAITING'? 'checked' : null}}>
                                                    <label class="form-check-label" for="status1">
                                                        WAITING
                                                    </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2"
                                                    value="PROSES" {{$data->status == 'PROSES'? 'checked' : null}}>
                                                    <label class="form-check-label" for="status2">
                                                    PROSES
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status3"
                                                    value="DONE" {{$data->status == 'DONE'? 'checked' : null}}>
                                                    <label class="form-check-label" for="status3">
                                                    DONE
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
