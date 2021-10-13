        <!-- Page Sidebar Start-->
        <div class="iconsidebar-menu">
            <div class="sidebar">
                <ul class="iconMenu-bar custom-scrollbar">
                    <li><a class="bar-icons" href="javascript:void(0)">
                            <i class="pe-7s-home"></i><span>General </span>
                        </a>
                        <ul class="iconbar-mainmenu custom-scrollbar">
                            <li>
                                @if (auth()->user()->role == 'adm')
                                <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                @elseif (auth()->user()->role == 'pgl')
                                <a href="{{route('pengepul.dashboard')}}">Dashboard</a>
                                @elseif (auth()->user()->role == 'slr')
                                <a href="{{route('penjual.dashboard')}}">Dashboard</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                    @if (auth()->user()->role == 'adm')
                    <li><a class="bar-icons" href="javascript:void(0)"><i
                                class="pe-7s-portfolio"></i><span>Barang</span></a>
                                <ul class="iconbar-mainmenu custom-scrollbar">
                            <li><a href="{{route('admin.kategori.barang')}}">Kategori</a></li>
                            <li><a href="{{route('admin.barang')}}">Barang</a></li>
                        </ul>
                    </li>
                    <li><a class="bar-icons" href="javascript:void(0)"><i
                        class="pe-7s-portfolio"></i><span>Pengepul</span></a>
                        <ul class="iconbar-mainmenu custom-scrollbar">
                            <li><a href="{{route('admin.pengepul')}}">Data Pengepul</a></li>
                        </ul>
                    </li>
                    <li><a class="bar-icons" href="javascript:void(0)"><i
                        class="pe-7s-portfolio"></i><span>Penjual</span></a>
                        <ul class="iconbar-mainmenu custom-scrollbar">
                            <li><a href="{{route('admin.penjual')}}">Data Penjual</a></li>
                        </ul>
                    </li>
                    @endif
                    <li><a class="bar-icons" href="javascript:void(0)"><i
                        class="pe-7s-portfolio"></i><span>Order</span></a>
                        <ul class="iconbar-mainmenu custom-scrollbar">
                            <li>
                                @if (auth()->user()->role == 'adm')
                                <a href="{{route('admin.order')}}">Data Order</a>
                                @elseif (auth()->user()->role == 'pgl')
                                <a href="{{route('pengepul.order')}}">Data Order</a>
                                @elseif (auth()->user()->role == 'slr')
                                <a href="{{route('penjual.order')}}">Dashboard</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
