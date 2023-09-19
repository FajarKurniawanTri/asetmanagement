    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('u_dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
            </div>
            <div class="sidebar-brand-text mx-3">IT Asset Management</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('u_dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoUnit"
                aria-expanded="true" aria-controls="collapseTwoUnit">
                <i class="fas fa-fw fa-city"></i>
                <span>Unit & Location</span>
            </a>
            <div id="collapseTwoUnit" class="collapse" aria-labelledby="headingTwoUnit" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{ route('U-group') }}">Group Unit</a>
                    <a class="collapse-item" href="{{ route('unit') }}">Unit</a>
                    <a class="collapse-item" href="{{ route('location') }}">Location</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - IT ASSET Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('admin_aset/#') }}" data-toggle="collapse" data-target="#collapseITASSET"
                aria-expanded="true" aria-controls="collapseITASSET">
                <i class="fas fa-fw fa-camera"></i>
                <span>IT ASSET</span>
            </a>
            <div id="collapseITASSET" class="collapse" aria-labelledby="headingITASSET" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Asset</h6>
                    <a class="collapse-item" href="{{ route('NVR') }}">NVR</a>
                    <a class="collapse-item" href="{{ route('DVR') }}">DVR</a>
                    <a class="collapse-item" href="{{ route('CCTV') }}">CCTV</a>
                    <a class="collapse-item" href="{{ route('FACE') }}">ACCESS CONTROL</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - SERVICE Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('admin_aset/#') }}" data-toggle="collapse" data-target="#collapseSERVICE"
                aria-expanded="true" aria-controls="collapseSERVICE">
                <i class="fas fa-fw fa-cog"></i>
                <span>SERVICE</span>
            </a>
            <div id="collapseSERVICE" class="collapse" aria-labelledby="headingSERVICE" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Asset</h6>
                    <a class="collapse-item" href="{{ route('service') }}">CCTV</a>
                    <a class="collapse-item" href="{{ route('U-FSERVICE') }}">ACCESS CONTROL</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <!-- Sidebar Message -->
    </ul>
    <!-- End of Sidebar -->