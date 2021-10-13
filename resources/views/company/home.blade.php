@extends('company.layouts.main')

@section('content')


<section>
    <div class="row m-0">
        <div class="col-md-6"
            style="background-image: url('{{asset('template')}}/assets/img/hero2.png'); background-repeat: no-repeat; position: relative; background-position: bottom; background-size: contain;">
            <div class="p-5 mt-4">
                <h1 class="text-success">Recycle for Everyone</h1>
                <p class="h4 text-dark my-2">Platform yang menyediakan transaksi jual-beli barang bekas yang
                    bisa dilakukan oleh semua orang</p>
                <a href="" class="btn btn btn-success my-3">Mulai Sekarang</a>
            </div>
        </div>
        <div class="col-md-6 pt-5 text-right">
            <img src="{{asset('template')}}/assets/img/hero1.png" class="w-100 img-responsive" alt="">
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0 align-items-center">
            <div class="col-md-6 p-5">
                <img src="{{asset('template')}}/assets/img/hero4.png" class="w-100 img-responsive" alt="">
            </div>
            <div class="col-md-6">
                <h1 class="text-success mb-4">Misi kami menyediakan platform transaksi jual-beli barang bekas</h1>
                <p class="h4 text-dark my-2">Teknologi Mallsampah didesain untuk menangkap limbah
                    dari sumber timbulnya, dengan menggunakan jejaring
                    pengepul dan pemulung lokal sebagai kunci dari rantai
                    daur ulang di Indonesia.</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 text-center mb-4">
                <h1 class="text-success">Testimonials</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{asset('template')}}/assets/img/man.jpg" class="rounded-circle" width="60" alt="">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="text-success">Auful Kirom</h4>
                                        <p class="m-0 text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Consequatur, vero.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{asset('template')}}/assets/img/man.jpg" class="rounded-circle" width="60" alt="">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="text-success">Auful Kirom</h4>
                                        <p class="m-0 text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Consequatur, vero.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row m-0">
        <div class="col-12">
            <img src="{{asset('template')}}/assets/img/hero3.png" class="w-100" alt="">
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
                <img src="{{asset('template')}}/assets/img/playstore.png" width="300" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
