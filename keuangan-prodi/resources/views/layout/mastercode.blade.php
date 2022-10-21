<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KEUANGAN PRODI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bs-stepper/css/bs-stepper.min.css')}}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/dropzone/min/dropzone.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="icon" href="{{asset('gambar/umbjm.png')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
            </ul>
        </nav>
        <!-- /.navbar -->
        <ul class="navbar-nav">
            <li class="nav-item">
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    </a>
                </div>
            </li>
        </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="{{asset('gambar/umbjm.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">KEUANGAN PRODI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name}} - {{auth()->user()->level}}</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if (auth()->user()->level=="admin")
                        <li class="nav-item">
                            <a href="/alokasidana" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alokasi Dana Pagu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Pengajuan RAB
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/vallaboratorium" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/valtugasakhir" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tugas Akhir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/valpkl" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Praktik Kerja Lapangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/valasosiasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asosiasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/valkuliahpakar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kuliah Pakar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/valreakreditasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reakreditasi</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="/laporan" class="nav-link">
                                <i class="nav-icon 	fa fa-file"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/filterlaporan" class="nav-link">
                                <i class="nav-icon 	fa fa-file"></i>
                                <p>
                                    Laporan Pengajuan
                                </p>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->level=="user")
                        <li class="nav-item">
                            <a href="/danauser" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alokasi Dana Pagu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Pengajuan RAB
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/laboratorium" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tugasakhir" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tugas Akhir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pkl" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Praktik Kerja Lapangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/asosiasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asosiasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kuliahpakar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kuliah Pakar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/reakreditasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reakreditasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Status Pengajuan RAB
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/statuslaboratorium" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statustugasakhir" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tugas Akhir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statuspkl" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Praktik Kerja Lapangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statusasosiasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asosiasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statuskuliahpakar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kuliah Pakar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/statusreakreditasi" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reakreditasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>LogOut</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        </div>
    <!-- jQuery -->
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>