<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <img src="{{ asset('images/LOGO JPG.png') }}" class="img-fluid" width="60px" alt="Responsive image">
        <div class="sidebar-brand-text mx-3">KPRSTTNF</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('active-dashboard')">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item @yield('active-voting')">
        <a class="nav-link" href="/admin/voting">
            <i class="fas fa-fw fas fa-poll"></i>
            <span>Voting</span></a>
    </li>

    {{-- <!-- Divider -->
    <hr class="sidebar-divider"> --}}

    <!-- Nav Item - Tables -->
    <li class="nav-item @yield('active-users')">
        <a class="nav-link" href="/admin/mahasiswa">
            <i class="fas fa-fw fa-table"></i>
            <span>Mahasiswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
