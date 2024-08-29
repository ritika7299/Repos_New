<!DOCTYPE html>
<html>

<head>
    <!-- site Page Info -->
    <meta charset="utf-8" />
    <title>Login</title>

    <!-- site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/backend/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/backend/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/backend/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="public/backend/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="public/backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="public/backend/vendors/styles/style.css" />

    <!-- Global base tag (gtag.js) - Google Analytics -->
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

<body class="login-page">
    <!-- sign-in wrap -->
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <!-- container -->
        <div class="container login-container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?php session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login</h2>
                        </div>
                        <!-- Sign-in form  -->
                        <form action="" method="POST">
                            <?php csrf_field() ?>
                            <div class="input-group custom">
                                <input type="email" class="form-control form-control-lg" placeholder="Email" id="email"
                                    required />
                                <!-- <lable class="text-danger">
                                        <p>Email address is not valid.</p>
                                    </lable> -->
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" placeholder="Password"
                                    id="password" required />
                                <!-- <lable class="text-danger">
                                        <p>Password is not valid.</p>
                                    </lable> -->
                                <div class="input-group-append custom">
                                    <span class="input-group-text" onclick="showPassword()"><i
                                            class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <!-- <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label> -->
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
                                        <button class="btn btn-primary btn-lg btn-block" href="#">Login</button>
                                    </div>
                                    <div class="input-group mb-0 mt-2">
                                        <a class="btn btn-lg btn-block" href="user/index"><span class="text-info">Don't
                                                have an account?</span><span class="text-primary"><b>
                                                    Register</b></span></a>
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
    <!-- js -->
    <script src="public/backend/vendors/scripts/demo.js"></script>
    <script src="public/backend/vendors/scripts/core.js"></script>
    <script src="public/backend/vendors/scripts/script.min.js"></script>
    <script src="public/backend/vendors/scripts/process.js"></script>
    <script src="public/backend/vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>