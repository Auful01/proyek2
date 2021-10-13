@extends('company.layouts.main')

@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0 align-items-center">
            <div class="col-md-6 p-5">
                <img src="{{asset('template')}}/assets/img/hero4.png" class="w-100 img-responsive" alt="">
            </div>
            <div class="col-md-6">
                <h1 class="text-success mb-4">Pengepul</h1>
                <p class="h4 text-dark my-2">Anda bisa mendaftarkan diri sebagai pengepul
                    untuk mencari barang bekas yang disediakan
                    pada aplikasi ini.</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0 align-items-center">
            <div class="col-md-6">
                <h1 class="text-success mb-4">Penjual Barang Bekas</h1>
                <p class="h4 text-dark my-2">Anda bisa mendaftarkan diri sebagai penjual
                    barang bekas untuk dijual kepada pengepul
                    pada aplikasi ini.</p>
                </div>
            <div class="col-md-6 p-5">
                <img src="{{asset('template')}}/assets/img/hero1.png" class="w-100 img-responsive" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
