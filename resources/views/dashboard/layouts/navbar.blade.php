        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right">
                <div class="main-header-left text-center">
                    <div class="logo-wrapper">
                        @if (auth()->user()->role == 'adm')
                            <a href="{{ route('admin.dashboard') }}">
                            @elseif (auth()->user()->role == 'pgl')
                                <a href="{{ route('pengepul.dashboard') }}">
                                @elseif (auth()->user()->role == 'slr')
                                    <a href="{{ route('penjual.dashboard') }}">
                        @endif

                        <img src="{{ asset('images/logo4.png') }}" width="140" alt="">

                        </a>
                    </div>
                </div>
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle"
                                data-feather="align-center"></i></label>
                    </div>
                </div>
                <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"> </i></div>
                <div class="nav-right col pull-right right-menu">
                    <ul class="nav-menus">
                        <h1></h1>
                        <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid"
                                    src="{{ asset('assets') }}/images/dashboard/user.png" alt=""></span>
                            <ul class="onhover-show-div profile-dropdown">
                                <li class="gradient-primary">
                                    <h5 class="f-w-600 mb-0">Elana Saint</h5><span>Web Designer</span>
                                </li>
                                <li><i data-feather="message-square"> </i>Beranda</li>
                                <li><i data-feather="user"> </i>Profile</li>
                                <li><i data-feather="settings"> </i>
                                    <a href=""
                                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                    </a>
                                    <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends
