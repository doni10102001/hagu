<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.home') }}" class="brand-link">
    <img src="{{ asset('image/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light"><b>Hagu</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('image/profil.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('admin.show') }}" class="d-block">{{ auth('admin')->user()->name }}</a>
        <div>
          <sup>
            <i class="fas fa-circle fa-sm text-primary"></i> <font style="color: rgba(255,255,255,.8);">{{ Auth('admin')->user()->active? 'Online' : 'Offline' }}</font>
          </sup>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link active">
                  <i class="fas fa-home fas-fw nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MANAJEMEN DATA</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher fas-fw"></i>
              <p>
               Informasi Data Aplikasi
             </p>
           </a>
         </li>
          <li class="nav-item">
            <a href="{{ route('guru') }}" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher fas-fw"></i>
              <p>
               Guru
             </p>
           </a>
         </li>
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
            <p>
             Absensi
             <i class="fas fa-angle-left right"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('absensi_masuk') }}" class="nav-link">
              <i class="fas fa-thumbtack nav-icon"></i>
              <p>Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('absensi_pulang') }}" class="nav-link">
              <i class="fas fa-thumbtack nav-icon"></i>
              <p>Pulang</p>
            </a>
          </li>
        </ul>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-qrcode"></i>
            <p>
             QR Kode
             <i class="fas fa-angle-left right"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('qr') }}" class="nav-link">
              <i class="fas fa-thumbtack nav-icon"></i>
              <p>Absensi Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('qr_out') }}" class="nav-link">
              <i class="fas fa-thumbtack nav-icon"></i>
              <p>Absensi Pulang</p>
            </a>
          </li>
        </ul>
        <li class="nav-item">
          <a href="{{ route('ketKeh') }}" class="nav-link">
            <i class="nav-icon far fa-file-alt fas-fw"></i>
            <p>
             Ket. Kehadiran
           </p>
         </a>
       </li>
       <li class="nav-item">
        <a href="{{ route('laporan_kehadiran') }}" class="nav-link">
          <i class="nav-icon far fa-file-alt fas-fw"></i>
          <p>
           Laporan Kehadiran
         </p>
       </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="nav-link">
      <i class="nav-icon fas fa-power-off fas-fw"></i>
      <p> 
       Keluar
     </p>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </a>
</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>