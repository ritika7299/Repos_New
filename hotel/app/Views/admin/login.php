<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets_fol/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets_fol/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets_fol/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-image" style="
    background-image: url('images/admin_bg.jpg');
    height: 100vh;
  ">
    <!-- login-box -->
    <div class="login-box">
        <!-- login-card -->
        <div class="card card-outline shadow-lg">
            <!-- login-logo -->
            <div class="card-header text-center">
                <a href="#" class="h3"><span class="text-info"><b>ADMIN</b></span></a>
            </div>
            <!-- /login-logo -->
            <div class="card-body">
                <!-- login-form -->
                <form action="#" method="post">
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" id="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text" onclick="showPassword()">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <!-- login-button -->
                    <div class="mt-2">
                        <button type="submit" class="btn btn-info btn-block">Sign-in <i
                                class="fas fa-paper-plane"></i></button>
                    </div>
                    <!-- /login-button -->
                </form>
                <div class="mt-2 d-flex text-align-right">
                    <a href="#">Forgot password?</a>
                </div>
                <!-- login-form -->
            </div>
            <!-- <div class="text-primary mb-5 d-flex justify-content-center">
                Don't have an account?

                <a href="#" class="text-center">
                    <b>Register</b> </a>
            </div> -->
            <!-- /card-body -->
        </div>
        <!-- /login-card -->

    </div>
    <!--/login-box -->
</body>
<!-- jQuery -->
<script src="assets_fol/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets_fol/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets_fol/dist/js/adminlte.min.js"></script>
<script src="assets_fol/build/js/main.js"></script>

</html>