@extends('user.main')

@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0 align-items-center">
            <div class="col-md-6 p-5">
                <img src="{{asset('user/assets/img/hero4.png')}}" class="w-100 img-responsive" alt="">
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
                <img src="{{asset('user/assets/img/hero1.png')}}" class="w-100 img-responsive" alt="">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-6">
                <h4 class="text-success mb-3">KangLoak</h4>
                <p>
                    <a href="" class="text-dark">Layanan</a>
                </p>
                <p>
                    <a href="" class="text-dark">Tentang Kami</a>
                </p>
                <p>
                    <a href="" class="text-dark">Kontak Kami</a>
                </p>
            </div>
            <div class="col-md-6">
                <h3>Dapatkan aplikasi KangLoak di</h3>
                <img src="{{asset('user/assets/img/playstore.png')}}" width="300" alt="">
            </div>
        </div>
    </div>
</section>

<section class="mt-5 bg-light">
    <div class="row m-0">
        <div class="col-12 text-center py-4">
            <img src="{{asset('user/assets/img/logo2.png')}}" width="100" alt="">
            <br>
            <small>Copyright &copy; 2021. Pyhtagoras Team. KangLoak</small>
        </div>
    </div>
</section>
@endsection
