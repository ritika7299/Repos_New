<?php include ('template/login-header.php'); ?>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
        </div>
    </div>
    <!-- sign-in wrap -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <!-- container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Sign-In</h2>

                        </div>
                        <!-- Sign-in form  -->
                        <form action="<?php echo site_url('/login/authenticate'); ?>" method="POST">
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" placeholder="Username" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    placeholder="Password" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text" onclick="showPassword()"><i
                                            class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html"><span class="hover-text-danger">Forgot
                                                Password?</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-primary btn-lg btn-block" href="">Sign-In</button>
                                    </div>
                                    <div class="input-group mb-0 mt-2">
                                        <a class="btn btn-lg btn-block" href="signup.html"><span class="text-info">Don't
                                                have an account?</span><span class="text-primary"><b>
                                                    Sign-Up</b></span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Sign-in form  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- sign-in wrap -->
    <?php include ('template/login-footer.php'); ?>