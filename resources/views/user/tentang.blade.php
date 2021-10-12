@extends('user.main')



@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 text-center">
                <h1 class="text-success">Tentang Kami</h1>
                <img src="{{asset('user/assets/img/logo2.png')}}" class="my-4" width="200" alt=""> <br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row m-0">
        <div class="col-12">
            <img src="{{asset('assets/img/hero3.png')}}" class="w-100" alt="">
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-6">
                <h4 class="text-success mb-3">KangLoak</h4>
                <p>
                    <a href="{{route('layanan')}}" class="text-dark">Layanan</a>
                </p>
                <p>
                    <a href="{{route('tentang')}}" class="text-dark">Tentang Kami</a>
                </p>
                <p>
                    <a href="{{route('kontak')}}" class="text-dark">Kontak Kami</a>
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
            <img src="./assets/img/logo2.png" width="100" alt="">
            <br>
            <small>Copyright &copy; 2021. Pyhtagoras Team. KangLoak</small>
        </div>
    </div>
</section>
@endsection



