<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IT Asset Management</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('admin_asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('admin_asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('admin_asset/img/favicon.ico') }}" />

    <!-- Custom styles for this page -->
    <link href="{{ asset('admin_asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">IT Asset Management</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
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
                        <a class="collapse-item" href="{{ route('A-GROUP') }}">Group Unit</a>
                        <a class="collapse-item" href="{{ route('A-UNIT') }}">Unit</a>
                        <a class="collapse-item" href="{{ route('A-LOCATION') }}">Location</a>
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
                        <a class="collapse-item" href="{{ route('A-VR') }}">VR</a>
                        <a class="collapse-item" href="{{ route('A-NVR') }}">NVR</a>
                        <a class="collapse-item" href="{{ route('A-DVR') }}">DVR</a>
                        <a class="collapse-item" href="{{ route('A-CCTV') }}">CCTV</a>
                        <a class="collapse-item" href="{{ route('A-FACE') }}">ACCESS CONTROL</a>
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
                        <h6 class="collapse-header">History</h6>
                        <a class="collapse-item" href="{{ route('A-SERVICE') }}">CCTV</a>
                        <a class="collapse-item" href="{{ route('A-FSERVICE') }}">ACCESS CONTROL</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('A-DATA') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span>
                </a>
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="{{ asset('admin_asset/#') }}" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ auth()->user()->name }}
                                    <br>
                                    <small>{{ auth()->user()->level }}</small>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('admin_asset/img/1.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href='' data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="profileModalLabel">Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="First Name" value="{{ auth()->user()->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="labels">Email</label>
                                                            <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="labels">Role</label>
                                                            <input type="text" name="Role" disabled class="form-control" placeholder="Role" value="{{ auth()->user()->role }}">
                                                        </div>
                                                    </div>
                                                    <!-- Add more form fields for other profile attributes here -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" onclick="window.location.href = '{{ route('A-GROUP') }}';"
                            style="cursor: pointer;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                GROUP
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $totalGroup }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-city fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" onclick="window.location.href = '{{ route('A-UNIT') }}';"
                            style="cursor: pointer;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                UNIT
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $totalUnit }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-city fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4"
                            onclick="window.location.href = '{{ route('A-LOCATION') }}';" style="cursor: pointer;">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                LOCATION</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalLocation }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-thumbtack fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4"
                            onclick="window.location.href = '{{ route('A-CCTV') }}';" style="cursor: pointer;">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                CCTV</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCctv }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-camera-retro fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4" onclick="window.location.href = '{{ route('A-FACE') }}';"
                            style="cursor: pointer;">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                ACCESS CONTROLS</div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalFace }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-record-vinyl fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Content Row -->

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">CCTV STATUS</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink1">
                                                    <div class="dropdown-header">Chart Options:</div>
                                                    <a class="dropdown-item" href="#"></a>
                                                    <a class="dropdown-item" href="#"></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Another option</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-area" style="height: 300px; width: 100%;">
                                                {!! $data['CctvChart']->container() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">ACCESS CONTROL STATUS</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink2">
                                                    <div class="dropdown-header">Chart Options:</div>
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Another option</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-area" style="height: 300px; width: 100%;">
                                                {!! $data['faceChart']->container() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center">
                        <span>© 2023 IT Aset Management</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ asset('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js scripts -->
<script src="{{ $data['faceChart']->cdn() }}"></script>
{{ $data['faceChart']->script() }}

<script src="{{ $data['CctvChart']->cdn() }}"></script>
{{ $data['CctvChart']->script() }}

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('admin_asset/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript -->
<script src="{{ asset('admin_asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages -->
<script src="{{ asset('admin_asset/js/sb-admin-2.min.js') }}"></script>
<!-- Page level plugins -->
<script src="{{ asset('admin_asset/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('admin_asset/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('admin_asset/js/demo/chart-area-demo.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('admin_asset/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
