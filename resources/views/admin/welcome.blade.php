<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body>

    <body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
    
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <h1><i class="fas fa-spinner fa-spin text-primary"></i></h1> 
                <h4>Loading</h4>
            </div>
    
            <!-- Navbar -->
            @include('navBar')
            <!-- /.navbar -->
    
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar  elevation-4">
                <!-- Brand Logo -->
                @include("sidebar")
            </aside>
    
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                    
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
    
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Info boxes -->
    
                        <!-- Main row -->
                        <div class="row">
    
                            <div class="col-md-12 d-flex justify-content-center">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box mb-3 bg-warning mx-1">
                                    <span class="info-box-icon"><i class="fas fa-tag"></i></span>
    
                                    <div class="info-box-content">
                                        <span class="info-box-text">Visitors</span>
                                        <span class="info-box-number">5,200</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <div class="info-box mb-3 bg-success  mx-1">
                                    <span class="info-box-icon"><i class="far fa-heart"></i></span>
    
                                    <div class="info-box-content">
                                        <span class="info-box-text">Clients</span>
                                        <span class="info-box-number">92,050</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                                <!-- /.info-box -->
                                <div class="info-box mb-3 bg-info mx-1">
                                    <span class="info-box-icon"><i class="far fa-comment"></i></span>
    
                                    <div class="info-box-content">
                                        <span class="info-box-text">Direct Messages</span>
                                        <span class="info-box-number">163,921</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
    
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
    
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
    
            <!-- Main Footer -->
           @include("footer")
    
</body>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('') }}"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('') }}"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}"></script>
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
</html>