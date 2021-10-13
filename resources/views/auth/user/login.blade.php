<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template') }}/vendor/auth/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template') }}/vendor/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template') }}/vendor/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/vendor/auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/vendor/auth/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title py-5"
                    style="background-image: url({{ asset('template') }}/assets/img/bg-slide.jpg);">
                    <span class="login100-form-title-1" data-aos="zoom-in">
                        Log In
                    </span>
                </div>

                @if (Session::has('error'))
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="alert alert-danger my-3" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('user.post.login') }}" class="login100-form validate-form pb-0">
                    @csrf
                    <div class="wrap-input100 validate-input mb-1 " data-validate="Email harus diisi" data-aos="fade-up">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukkan Email">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror

                    <div class="wrap-input100 validate-input mb-1 " data-validate="Password harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukkan password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror

                    <div class="container-login100-form-btn my-4" data-aos="zoom-in">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <small class="text-secondary">
                            Belum punya akun?
                            <a href="{{ route('user.show.register') }}" style="font-size: 12px;">Register</a>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <a href="{{ route('home.index') }}"><i class="fa fa-arrow-left"></i> Kembali ke halaman
                            utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('template') }}/vendor/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('template') }}/vendor/auth/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ asset('template') }}/vendor/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('template') }}/vendor/auth/js/main.js"></script>
    <script>
        $(document).ready(function() {
            // AOS
            AOS.init();
        });
    </script>

</body>

</html>
