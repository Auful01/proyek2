@extends('company.layouts.main')

@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 text-center">
                <h1 class="text-success">Market Pengepul</h1>
                <img src="{{asset('template')}}/assets/img/logo2.png" class="my-4" width="200" alt=""> <br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
@endsection
