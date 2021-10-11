<div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-lg-6 main-header">
            <h2>{{Request::segment(1) == '/' || 'Beranda' ? 'Beranda' : ''}}</h2>
            <h6 class="mb-0">admin panel</h6>
          </div>
          <div class="col-lg-6 breadcrumb-right">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
              <li class="breadcrumb-item">{{Request::segment(1) == '/' || 'Beranda' ? 'Beranda' : ''}}</li>
              <li class="breadcrumb-item active">Default  </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- Container-fluid Ends-->
    @if (Request::segment(1) == '' )
    <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <div class="modal-body">
            <div class="modal-header"></div>
            <div class="contain p-30">
              <div class="text-center">
                <h3>Selamat Datang di Kangloak</h3>
                <p>Mulai jual barang bekasmu sekarang juga! </p>
                <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Yuk!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
