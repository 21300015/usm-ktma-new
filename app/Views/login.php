<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>Pendaftaran KTMA Universitas Saintek Muhammadiyah</title>

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="assets/css/cassie.css">

  </head>
  <body>
    <div class="signin-panel">
      <img src="assets/img/bg1.png" class-Name="svg-bg">

      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>cassie</span></a>
          <h4 class="signin-title">Welcome back!</h4>
          <h5 class="signin-subtitle">Please signin to continue.</h5>

          <div class="signin-form">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Enter your email address" value="yourname@yourdomain.com">
            </div>

            <div class="form-group">
              <label class="d-flex justify-content-between">
                <span>Password</span>
                <a href="" class="tx-13">Forgot password?</a>
              </label>
              <input type="password" class="form-control" placeholder="Enter your password" value="yourpassword">
            </div>

            <div class="form-group d-flex mg-b-0">
              <button class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
              <a href="page-signup.html" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a>
            </div>

            <div class="divider-text mg-y-30">Or</div>

            <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase btn-block">Login with Facebook</a>
          </div>
          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="assets/js/svg-inline.js"></script>
  </body>
</html>
