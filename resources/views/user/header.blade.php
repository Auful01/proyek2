<header>
    <div class="wrap__top__header">
        <div class="container">
            <div class="top__header text-center py-2">
                <p class="m-0">@auth
                    {{Auth::user->name}},
                @endauth
                Selamat Datang di Website KangLoak</p>
            </div>
        </div>
    </div>
</header>
<!-- End Topbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo4.png')}}" alt="" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::segment(1) == '' ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/')}}">Beranda</a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'layanan' ? 'active' : ''}}">
                    <a class="nav-link " href="{{route('layanan')}}">Layanan</a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'tentang' ? 'active' : ''}}">
                    <a class="nav-link " href="{{route('tentang')}}">Tentang Kami</a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'kontak' ? 'active' : ''}}">
                    <a class="nav-link"  href="{{route('kontak')}}">Kontak Kami</a>
                </li>
                <li class="nav-item {{Request::segment(1) == 'marketplace' ? 'active' : ''}}">
                    <a class="nav-link"  href="{{route('marketplace')}}">Market Place</a>
                </li>
                @guest
                <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                    <a class="nav-link btn btn-sm btn-outline-success " href="{{route('login-user')}}">Login</a>
                </li>
                <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                    <a class="nav-link btn btn-sm btn-success text-light" href="{{route('registrasi-user')}}">Register</a>
                </li>
                @endguest

                @auth
                <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}

                        <li class="nav-item mx-md-2 my-md-0 my-sm-2 my-2">
                            <a class="nav-link btn btn-sm btn-success text-light" href="{{route('registrasi-user')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    {{-- </div> --}}
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
