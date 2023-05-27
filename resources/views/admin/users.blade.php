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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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

                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary my-4" data-toggle="modal"
                                data-target="#registrationModal">
                                Add New User
                            </button>

                            <table class="table table-striped" id="my_table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">CreatedAt</th>
                                        <th scope="col">updatedAt</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>x[1]</td>
                                        <td>x[2]</td>
                                        <td>x[3]</td>
                                        <td>x[6]</td>
                                        <td>x[8]</td>
                                        <td>x[9]</td>
                                        <td>
                                            <a href="/user/edit/x[0]" class="btn btn-sm btn-primary">Edit</a>
                                            <button onclick="$('#deleteval').attr('href','user/delete/x[0]');"
                                                class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleteModal">Delete</button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this record?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <a href="#" class="btn btn-danger" id="deleteval">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Create account model -->

                            <div class="modal fade" id="registrationModal" tabindex="-1"
                                aria-labelledby="registrationModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                                            <button class="btn-close" data-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/register">
                                                <div class="mb-3">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" pattern="[^0-9]+" class="form-control" id="firstName"
                                                        name="firstName" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" pattern="[^0-9]+" class="form-control" id="lastName"
                                                        name="lastName" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">password</label>
                                                    <input type="text" class="form-control" id="password"
                                                        name="password" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="id" class="form-label">ID</label>
                                                    <input type="text" maxlength="16" class="form-control" id="id"
                                                        name="id" required>
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-secondary mx-2"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#my_table').DataTable();
        });
    </script>
</html>