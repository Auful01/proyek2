<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/logo5.png')}}">
    @include('layouts.admin.header')
  </head>
  <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
    <!-- Loader starts-->
    <div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('layouts.admin.pageHeader')

        <div class="page-body-wrapper">

            @include('layouts.admin.iconSidebar')

            @include('layouts.admin.rightSidebar')

            @include('layouts.admin.body')
            
            @include('layouts.admin.footer')

        </div>
    </div>
    {{-- <div class="page-wrapper document">
      <!-- Page Header Start-->
      <div class="page-main-header document-header" style="background: #fff; filter: drop-shadow(20px 5px 10px #02834d73)">
          @include('layouts.admin.sidebar')
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper document-content" >
        <!-- Page Sidebar Start-->
        
        <div class="page-sidebar custom-scrollbar" id="myScrollspy">
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
    </div> --}}
    @include('layouts.admin.js')
  </body>
</html>
