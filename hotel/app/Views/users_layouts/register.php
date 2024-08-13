<?php include ('template/register-header.php'); ?>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li>
                        <div class="login-icon d-flex">
                            <a href="<?php echo site_url(); ?>UserCon/index">
                                <div class="login-text mt-3 mr-2">
                                    Login
                            </a>
                        </div>
                        <div class="icon fa-sm">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/person.svg" class="svg"
                                alt="" />
                        </div>
            </div>
            </li>
            </ul>
        </div>
    </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?php echo site_url(); ?>public/backend/vendors/images/register-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <!-- signup form area -->
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Sign-Up</h2>
                            <?php if (session()->getFlashdata('msg')): ?>
                                <div><?= session()->getFlashdata('msg') ?></div>
                            <?php endif; ?>
                        </div>
                        <!-- Sign-in form  -->
                        <form action="<?php echo site_url('register/add'); ?>" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="cpass" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-primary btn-lg btn-block" href="">Sign-up</button>
                                    </div>
                                    <div class="input-group mb-0 mt-2">
                                        <a class="btn btn-lg btn-block" href="signup.html"><span class="text-info">Have
                                                already account?</span><span class="text-primary"><b>
                                                    Sign-In</b></span></a>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- Sign-in form  -->
                    </div>
                    <!-- signup form area -->
                    <!-- <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form class="tab-wizard2 wizard-circle wizard">
                                <h2 class="text-center mb-2">Sign-Up</h2>
                                <div class="form-wrap max-width-600 mx-auto">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="cpass" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
        data-backdrop="static">
        Launch modal
    </button>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Form Submitted!</h3>
                    <div class="mb-30 text-center">
                        <img src="<?php echo site_url(); ?>public/backend/vendors/images/success.png" />
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="login.html" class="btn btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->
</body>
<?php include ('template/register-footer.php'); ?>