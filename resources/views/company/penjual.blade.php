@extends('company.layouts.main')

@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 text-center">
                <h1 class="text-success">Market Penjual</h1>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <span class="badge badge-success">Penjual</span>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Nama Penjual</div>
                                            <div class="col-md-8"><strong>{{$item->user->name}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Kategori</div>
                                            <div class="col-md-8"><strong>{{$item->junk->junk_category->name}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Barang</div>
                                            <div class="col-md-8"><strong>{{$item->junk->name}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Berat (kg)</div>
                                            <div class="col-md-8"><strong>{{$item->weight}}</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-4">Alamat</div>
                                            <div class="col-md-8"><strong>{{$item->address}},{{$item->village}},{{$item->district}},{{$item->city}},{{$item->province}}</strong></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="m-0">Harga per berat : <strong>{{$item->junk->price}}/{{$item->junk->weight}} kg</strong></p>
                                    <a href="" class="btn btn-success">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
