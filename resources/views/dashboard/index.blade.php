@extends('dashboard.layouts.main')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Dashboard</h2>
                    <h6 class="mb-0">
                        @if (auth()->user()->role == 'adm')
                        Admin Panel
                        @elseif (auth()->user()->role == 'pgl')
                        Pengepul Panel
                        @elseif (auth()->user()->role == 'slr')
                        Penjual Panel
                        @endif
                    </h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            @if (auth()->user()->role == 'adm')
                            <a href="{{route('admin.dashboard')}}"><i class="pe-7s-home"></i></a>
                            @elseif (auth()->user()->role == 'pgl')
                            <a href="{{route('pengepul.dashboard')}}"><i class="pe-7s-home"></i></a>
                            @elseif (auth()->user()->role == 'slr')
                            <a href="{{route('penjual.dashboard')}}"><i class="pe-7s-home"></i></a>
                            @endif
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
