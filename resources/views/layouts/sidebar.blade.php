<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard Infrastruktur Ruas Jalan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Home</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Penambahan Data P2JN Kota Palembang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('clusters') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Laporan Hasil Clustering</span></a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Profile</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
