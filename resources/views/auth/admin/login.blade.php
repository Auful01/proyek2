<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('/images/logo5.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/images/logo5.png') }}" type="image/x-icon">
    <title>Login Admin</title>
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('assets') }}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="typewriter">
            <h1>KangLoak..</h1>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="containerp-0">
            <!-- login page start-->
            <div class="authentication-main">
                <div class="row my-5">
                    <div class="col-md-12">
                        <div class="card-body p-0">
                            <div class="cont">
                                @if (Session::has('error'))
                                    <div class="alert alert-danger my-3" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <img src="{{ asset('images/logo4.png') }}" width="200" class="mb-3" alt="">
                                <form action="{{ route('admin.post.login') }}" class="theme-form" method="POST">
                                    @csrf
                                    <h4>LOGIN</h4>
                                    <div class="form-group">
                                        <label class="col-form-label pt-0">Email</label>
                                        <input class="form-control" type="email" name="email">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input class="form-control" type="password" name="password">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login page end-->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets') }}/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets') }}/js/bootstrap/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets') }}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets') }}/js/sidebar-menu.js"></script>
    <script src="{{ asset('assets') }}/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets') }}/js/login.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
