<div class="iconsidebar-menu">
    <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
        <li class="{{Request::segment(1) == '/' || 'Beranda' ? 'open' : ''}}">
          <a class="bar-icons" href="{{url('/')}}">
            <i class="pe-7s-home"></i><span>Beranda</span>
          </a>
        </li>
        <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-users"></i><span>User</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">User</li>
            <li><a href="state-color.html">Pengepul</a></li>
            <li><a href="typography.html">Membership</a></li>
          </ul>
        </li>
        <li><span class="badge badge-pill badge-danger">Hot</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-box2"></i><span>Loakan</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">Loakan</li>
            <li><a href="{{ route('category-junk.index') }}">Kategori Barang</a></li>
            <li><a href="{{ route('junk.index') }}">Barang Loak</a></li>
          </ul>
        </li>
        <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-cart"></i><span>Order</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">Order</li>
            <li><a href="state-color.html">History Order</a></li>
            <li><a href="typography.html">Laporan</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
