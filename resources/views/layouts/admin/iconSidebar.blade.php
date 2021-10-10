<div class="iconsidebar-menu">
    <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
        <li class="{{Request::segment(1) == '/' || 'Beranda' ? 'open' : ''}}"><a class="bar-icons" href="javascript:void(0)">
            <!--img(src='../assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>Beranda</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">Dashboard</li>
            <li><a href="index.html">Default</a></li>
          </ul>
        </li>
        <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-portfolio"></i><span>User</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">User</li>
            <li><a href="state-color.html">Pengepul</a></li>
            <li><a href="typography.html">Membership</a></li>
          </ul>
        </li>
        <li><span class="badge badge-pill badge-danger">Hot</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-diamond"></i><span>Loakan</span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">Loakan</li>
            <li><a href="{{ route('category-junk.index') }}">Kategori Barang</a></li>
            <li><a href="scroll-reval.html">Barang Loak</a></li>
          </ul>
        </li>
       
      </ul>
    </div>
  </div>