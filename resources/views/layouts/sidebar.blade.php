<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.admin_dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-database"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard Infrastruktur Ruas Jalan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.admin_dashboard') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Halaman Utama</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Hasil Clustering</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('ruas') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Ruas Jalan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kriteria') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Kriteria</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('perhitungan.index')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Data Clustering</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('clustering.index')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Clustering</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
