
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: 7FAD39">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PETANIKU</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{'/home'}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda Admin</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('invoice') }}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Riwayat Transaksi</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{'/produk'}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Daftar Produk Pupuk</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{'/postContent'}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Post Content</span>
        </a>
      </li> --}}

      <!-- Nav Item - Charts -->
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{'/keranjang'}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Kasir</span></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Register</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dataPetani.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Penerima Subsidi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{'/pengumuman' }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Pengumuman</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contents.tampil') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Artikel</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{'/saran' }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Saran</span></a>
      </li>
      {{-- <li class="nav-item">
         @if (Route::has('register'))
      <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
  @endif
      </li> --}}
      {{-- <li class="nav-item">

       @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <br>
    <!-- End of Sidebar -->
