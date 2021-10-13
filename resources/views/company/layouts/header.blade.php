<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{asset('template')}}/assets/img/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('template')}}/assets/css/style.css" />
    <title>KangLoak</title>
</head>

<body>

    <!-- Topbar -->
    <header>
        <div class="wrap__top__header">
            <div class="container">
                <div class="top__header text-center py-2">
                    <p class="m-0">Selamat Datang di Website KangLoak</p>
                </div>
            </div>
        </div>
    </header>
    <!-- End Topbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home.index')}}">
                <img src="{{asset('template')}}/assets/img/logo2.png" width="150" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{Request::segment(1) == '' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('home.index')}}">Beranda</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'service' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('service')}}">Layanan</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'about' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item {{Request::segment(1) == 'contact' ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('contact')}}">Kontak Kami</a>
                    </li>
                    <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                        <a class="nav-link btn btn-sm btn-outline-success " href="{{route('user.show.login')}}">Login</a>
                    </li>
                    <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                        <a class="nav-link btn btn-sm btn-success text-light" href="{{route('user.show.register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
