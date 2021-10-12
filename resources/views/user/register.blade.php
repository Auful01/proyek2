<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('user/vendor/auth/images/icons/favicon.ico')}}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/vendor/auth/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('user/vendor/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('user/vendor/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/vendor/auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/vendor/auth/css/main.css')}}">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title py-5" style="background-image: url(./assets/img/bg-slide.jpg);">
					<span class="login100-form-title-1" data-aos="zoom-in">
						Register
					</span>
				</div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
				<form class="login100-form validate-form pb-0" action="{{route('register')}}" method="POST">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username harus diisi"
						data-aos="fade-up">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan username" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username harus diisi"
						data-aos="fade-up">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="name" placeholder="Masukkan username" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email harus diisi"
						data-aos="fade-up">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="email" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="No. HP harus diisi"
						data-aos="fade-up">
						<span class="label-input100">No.Hp</span>
						<input class="input100" type="number" name="phone" placeholder="Masukkan username" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password harus diisi"
						data-aos="fade-up">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate="Password harus diisi"
						data-aos="fade-up">
						<span class="label-input100">Konfirmasi Password </span>
						{{-- <input class="input100" type="password" name="password"> --}}
                        <input id="password-confirm" type="password" class="form-control"  placeholder="Masukkan password ulang" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn" data-aos="zoom-in">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
				<div class="row mt-3">
					<div class="col-12 text-center">
						<small class="text-secondary">
							Sudah punya akun?
							<a href="./login.html" style="font-size: 12px;">Login</a>
						</small>
					</div>
				</div>
				<hr>
				<div class="row mb-3">
					<div class="col-12 text-center">
						<a href="./index.html"><i class="fa fa-arrow-left"></i> Kembali ke halaman utama</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="{{asset('user/vendor/auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('user/vendor/auth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('user/vendor/auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="{{asset('user/vendor/auth/js/main.js')}}"></script>
	<script>
		$(document).ready(function () {
			// AOS
			AOS.init();
		});
	</script>

</body>

</html>
