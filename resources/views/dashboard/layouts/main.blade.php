@include('dashboard.layouts.header')
<!-- page-wrapper Start-->
<div class="page-wrapper">
    @include('dashboard.layouts.navbar')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        @include('dashboard.layouts.sidebar')
        @yield('content')
        @include('dashboard.layouts.footer')
