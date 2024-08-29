<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Register</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo base_url(); ?>public/backend/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo base_url(); ?>public/backend/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo base_url(); ?>public/backend/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/backend/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>public/backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>public/backend/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/backend/vendors/styles/style.css" />

    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>public/backend/vendors/styles/style-design.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="login-page bg-gradient-custom">
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container login-container">
            <div class="row justify-content-center">
                <div class="responsive-width">
                    <?php if (session()->getFlashdata('success_msg')): ?>
                        <div><?= session()->getFlashdata('error_msg') ?></div>
                    <?php endif; ?>
                    <!-- signup form area -->
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Register</h2>

                        </div>
                        <?php if (session()->getFlashdata('error')): ?>
                            <p><?= session()->getFlashdata('error') ?></p>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('success')): ?>
                            <p><?= session()->getFlashdata('success') ?></p>
                        <?php endif; ?>
                        <!-- Signup form  -->
                        <form action="<?php echo site_url(''); ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username"
                                        name="username" value="" required />
                                    <!-- <lable class="text-danger">
                                        <p>Username is wrong.</p>
                                    </lable> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                        name="email" value="" required />
                                    <!-- <lable class="text-danger">
                                        <p>Email is not match.</p>
                                    </lable> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter Password" required />
                                    <!-- <lable class="text-danger">
                                        <p>Password should be atleast 8 character.</p>
                                    </lable> -->
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="cpass"
                                        placeholder="Enter Confirm password" required />
                                    <!-- <lable class="text-danger">
                                        <p>Password doesn't match with given password</p>
                                    </lable> -->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-primary btn-lg btn-block" href="#"
                                            data-target="#success-modal" data-toggle="modal">Register</button>
                                    </div>
                                    <div class="input-group mb-0 mt-2">
                                        <a class="btn btn-lg btn-block" href="signup.html"><span class="text-info">Have
                                                an already account?</span><span class="text-primary"><b>
                                                    Login</b></span></a>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- /Signup form  -->
                    </div>
                    <!-- /signup form area -->
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup modal -->
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
                        <img src="<?php echo base_url(); ?>public/backend/vendors/images/success.png" />
                    </div>
                    Your details successfully submitted.
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="<?php echo base_url(''); ?>" class="btn btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /success Popup modal -->
</body>
<!-- js -->
<script src="<?php echo base_url(); ?>public/backend/vendors/scripts/core.js"></script>
<script src="<?php echo base_url(); ?>public/backend/vendors/scripts/script.min.js"></script>
<script src="<?php echo base_url(); ?>public/backend/vendors/scripts/process.js"></script>
<script src="<?php echo base_url(); ?>public/backend/vendors/scripts/layout-settings.js"></script>
<script src="<?php echo base_url(); ?>public/backend/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="<?php echo base_url(); ?>public/backend/vendors/scripts/steps-setting.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
        style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</html>