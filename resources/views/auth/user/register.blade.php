<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
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
                        Register
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
                @if (Session::has('success'))
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="alert alert-success my-3" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('user.post.register') }}" class="login100-form validate-form pb-0">
                    @csrf
                    <div class="wrap-input100 validate-input mb-1" data-validate="nik harus diisi" data-aos="fade-up">
                        <span class="label-input100">NIK</span>
                        <input class="input100" type="text" name="nik" placeholder="Masukkan nik">
                        <span class="focus-input100"></span>
                    </div>
                    @error('nik')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="Nama harus diisi" data-aos="fade-up">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" name="name" placeholder="Masukkan nama">
                        <span class="focus-input100"></span>
                    </div>
                    @error('name')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="email harus diisi" data-aos="fade-up">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukkan email">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="phone harus diisi" data-aos="fade-up">
                        <span class="label-input100">Nomor HP</span>
                        <input class="input100" type="number" name="phone" placeholder="Masukkan phone">
                        <span class="focus-input100"></span>
                    </div>
                    @error('phone')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="Tempat lahir harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Tempat Lahir</span>
                        <input class="input100" type="text" name="place_of_birth"
                            placeholder="Masukkan tempat lahir">
                        <span class="focus-input100"></span>
                    </div>
                    @error('place_pf_birth')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="Tanggal lahir harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Tanggal Lahir</span>
                        <input class="input100" type="date" name="date_of_birth"
                            placeholder="Masukkan tanggal lahir">
                        <span class="focus-input100"></span>
                    </div>
                    @error('date_of_birth')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="Alamat harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Alamat</span>
                        <textarea class="input100" name="address" rows="3"></textarea>
                        <span class="focus-input100"></span>
                    </div>
                    @error('address')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror
                    <div class="wrap-input100 validate-input mb-1" data-validate="Password harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukkan password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror

                    <div class="wrap-input100 validate-input mb-1" data-validate="Konfirmasi password harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Konfirmasi Password</span>
                        <input class="input100" type="password" name="password_confirmation"
                            placeholder="Masukkan konfirmasi password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password_confirmation')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror

                    <div class="wrap-input100 validate-input mb-1" data-validate="Jenis member harus diisi"
                        data-aos="fade-up">
                        <span class="label-input100">Jenis Member</span>
                        <div class="row mt-3">
                            <div class="col-6 pl-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="aktif"
                                        value="slr">
                                    <label class="form-check-label" for="aktif">
                                        Penjual
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 pl-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="nonaktif"
                                        value="pgl">
                                    <label class="form-check-label" for="nonaktif">
                                        Pengepul
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('role')
                        <small class="text-danger mb-2">{{ $message }}</small>
                    @enderror

                    <div class="container-login100-form-btn my-4" data-aos="zoom-in">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <small class="text-secondary">
                            Sudah punya akun?
                            <a href="{{ route('user.show.login') }}" style="font-size: 12px;">Login</a>
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
