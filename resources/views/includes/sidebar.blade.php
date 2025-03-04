<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="active">
          <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Data Master</li>
        <li class="dropdown {{ Request::is('topic', 'type','units','users','roles','status', 'permission') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Referensi</span></a>
          <ul class="dropdown-menu">
            {{-- <li class="{{ Request::is('topic') ? 'active' : '' }}"><a class="nav-link" href="/topic" >Topik Ticket</a></li>
            <li class="{{ Request::is('type') ? 'active' : '' }}"><a class="nav-link" href="/type">Tipe Ticket</a></li> --}}
            
            <li class="{{ Request::is('topic') ? 'active' : '' }}"><a class="nav-link" href="/topic"><i class="far fa-square"></i> <span>Kategori</span></a></li>
            <li class="{{ Request::is('type') ? 'active' : '' }}"><a class="nav-link" href="/type"><i class="far fa-square"></i> <span>Sub Kategori</span></a></li>
            <li class="{{ Request::is('status') ? 'active' : '' }}"><a class="nav-link" href="/status"><i class="far fa-square"></i> <span>Status</span></a></li>
            <li class="{{ Request::is('units') ? 'active' : '' }}"><a class="nav-link" href="/units"><i class="far fa-square"></i> <span>Peran</span></a></li>
            <li class="{{ Request::is('roles') ? 'active' : '' }}"><a class="nav-link" href="/roles"><i class="far fa-square"></i> <span>Hak Akses</span></a></li>
            <li><a class="nav-link" href="/master_menu"><i class="far fa-square"></i> <span>Menu</span></a></li>
            <li><a class="nav-link" href="/sub_menu"><i class="far fa-square"></i> <span>Sub Menu</span></a></li>
            <li class="{{ Request::is('permission') ? 'active' : '' }}"><a class="nav-link" href="/permission"><i class="far fa-square"></i> <span>Permission</span></a></li>
            <li class="{{ Request::is('users') ? 'active' : '' }}"><a class="nav-link" href="/users"><i class="far fa-square"></i> <span>Pengguna BO</span></a></li>
            <li><a class="nav-link" href="/pengguna"><i class="far fa-square"></i> <span>Pengguna Portal</span></a></li>
            
          </ul>
        </li>
        
        {{-- <li class="menu-header">Ticket</li> --}}
        <li><a class="nav-link" href="/ticket"><i class="far fa-square"></i> <span>Ticket</span></a></li>
        {{-- <li class="menu-header">Report</li> --}}
        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Laporan</span></a></li>
        {{-- <li class="menu-header">Setting</li> --}}
        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Setting</span></a></li>
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>        
    </aside>
  </div>