<?php include('template/login-header.php'); ?>

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
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <!-- sign-in container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-info">Admin</h2>
                        </div>
                        <!-- Sign-in form  -->
                        <?php $validation = \Config\Services::validation(); ?>
                        <form action="<?php echo site_url('Admin/login_ac'); ?>" method="post">
                            <?= csrf_field() ?>
                            <?php if (!empty(session()->getFlashdata('success'))): ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                                </div>
                            <?php endif; ?>
                            <?= csrf_field() ?>
                            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('fail') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" id="username" name="login_id" value="<?= set_value('login_id')?>"
                                    placeholder="Enter username or Email" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <?php if($validation->getError('login_id')): ?>
                                <div class="d-block text-danger" style="margin-top:-25px;margin-bottom;15px;">

                                </div>
                                <?php endif; ?>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?= set_value('password')?>"
                                    placeholder="Enter password" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text" onclick="showPassword()"><i
                                            class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <?php if($validation->getError('password')): ?>
                                <div class="d-block text-danger" style="margin-top:-25px;margin-bottom;15px;">

                                </div>
                                <?php endif; ?>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <!-- <div class="custom-control custom-checkbox checkbox-outline-info">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div> -->
                                </div>
                                <!-- <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html"><span class="hover-text-danger">Forgot
                                                Password?</span></a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <a class="btn btn-info btn-lg btn-block" href="">Login</a>
                                    </div>


                                </div>
                            </div>
                        </form>
                        <!-- Sign-in form  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- sign-in container -->
    </div>
    <!-- sign-in wrap -->
    <?php include('template/login-footer.php'); ?>