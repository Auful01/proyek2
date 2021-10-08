<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    @include('layouts.admin.header')
  </head>
  <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>New Era Admin Loading..</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper document">
      <!-- Page Header Start-->
      <div class="page-main-header document-header" style="background: #fff; filter: drop-shadow(20px 5px 10px #02834d73)">
          @include('layouts.admin.sidebar')
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper document-content" >
        <!-- Page Sidebar Start-->
        <div class="page-sidebar custom-scrollbar" id="myScrollspy">
          <div class="logo-wrapper"><a href="index.html"><img src="{{asset('images/logo4.png')}}" width="190px" alt=""></a></div>
          @include('layouts.admin.navbar')
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
          </div>
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            @include('layouts.admin.footer')
          </div>
        </footer>
      </div>
    </div>
    @include('layouts.admin.js')
  </body>
</html>
