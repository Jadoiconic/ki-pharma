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
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
    
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <h1><i class="fas fa-spinner fa-spin text-primary"></i></h1> 
                <h4>Loading</h4>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="card" style="width:60vh">
              
                <div class="card-header">
                    <h4 class="mb-0">Pharmacy Login</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="/">
                        <div class="form-group py-3">
                          <i class="fas fa-user icon"></i>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group d-flex">
                          <i class="fas fa-lock icon"></i>
                          <input type="password" class="form-control  py-3" id="password" name="password" placeholder="Password" required>
                          <button type="button" class="btn btn-sm btn-outline-secondary toggle-password"><i class="fas fa-eye"></i></button>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                          <button type="submit" class="btn btn-primary">Login</button>
                          <a href="#" class="text-secondary">Forgot password?</a>
                        </div>
                      </form>
                      
                </div>
            </div>
        </div>
        </div>
        
    
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
<script>
    const togglePassword = document.querySelector('.toggle-password');
    const passwordField = document.querySelector('#password');
  
    togglePassword.addEventListener('click', function () {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.querySelector('i').classList.toggle('fa-eye');
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>
</html>