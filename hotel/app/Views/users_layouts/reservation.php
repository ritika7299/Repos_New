<?php include ('template/dashboard-header.php'); ?>

<body>
    <!-- loader -->
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div>
    <!-- /loader -->
    <!-- header -->
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        </div>
        <div class="header-right">
            <div class="user-info-dropdown mr-3">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo3.jpg" alt="" />
                        </span>
                        <span class="user-name">Ritika</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /header -->
    <!-- right-sidebar -->
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /right-sidebar -->
    <!-- left-sidebar -->
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt=""
                    class="dark-logo" />
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo-white.svg" alt=""
                    class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-calendar-check-o"></span><span class="mtext">Rooms Booking</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon ti-comment-alt"></span><span class="mtext">User Manage</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo site_url(); ?>user_layouts/invoice" class="dropdown-toggle">
                            <span class="micon fa fa-group"></span><span class="mtext">Invoice</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon ti-comment-alt"></span><span class="mtext">Manage Complaints</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- /left-sidebar -->
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Booking</h2>
            </div>

            <!--customer and bookings details -->
            <div class="pd-20 card-box mb-30">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Customer Details</h4>
                            <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                <form>
                                    <div class="form-group">

                                        <input class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" value="" type="email" placeholder="Enter Email">
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Mobile">
                                    </div>
                                    <div class=" form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select ID</option>
                                            <option id="vo">Voter ID</option>
                                            <option id="ac">Aadhaar Card</option>
                                            <option id="pc">Pan Card</option>
                                            <option id="pp">Passport</option>
                                        </select>
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Id numbers">
                                    </div>
                                    <div class=" form-group">
                                        <input class="form-control" value="" type="tel" placeholder="Enter Address">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="pd-30 height-100-p">
                            <h4 class="mb-30 h4">Booking Information</h4>
                            <div id="chart" class="chart" data-highcharts-chart="0">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label>Check-In</label>
                                                <input class="form-control" value="" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label>Check-Out</label>
                                                <input class="form-control" value="" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <select class="form-control">
                                                    <option placeholder="">Select Room Type</option>
                                                    <option id="vo">Single</option>
                                                    <option id="ac">Deluxe</option>
                                                    <option id="pc">Superior</option>
                                                    <option id="pp">Double Deluxe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <select class="form-control">
                                                    <option placeholder="">Select Bed type</option>
                                                    <option id="vo">Single</option>
                                                    <option id="ac">Double</option>
                                                    <option id="pc">Triple</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <select class="form-control">
                                                    <option placeholder="">Select No. of Room</option>
                                                    <option id="vo">1</option>
                                                    <option id="ac">2</option>
                                                    <option id="pc">3</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <select class="form-control">
                                                    <option placeholder="">Select Meal</option>
                                                    <option id="vo">Breakfast</option>
                                                    <option id="ac">Lunch</option>
                                                    <option id="pc">Dinner</option>
                                                    <option id="pc">Full Meal</option>
                                                    <option id="pc">None</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-bold">Check-In</th>
                                                <th class="text-bold">Check-Out</th>
                                                <th class="text-bold">Include Meal</th>
                                                <th class="text-bold">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>07.08.2024</td>
                                                <td>08.08.2024</td>
                                                <td>Full Meal</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>1500/-</td>
                                                <td>1500/-</td>
                                                <td>1000/-</td>
                                                <td>4000/-</td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions clearfix">
                    <a class="btn btn-primary float-right mt-2" href="#finish" role="menuitem" data-toggle="modal"
                        data-target="#booking-modal">Submit
                        <i class="icon-copy fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- /customer and bookings details -->

            <!-- Booking successfully modal -->
            <div class="modal fade" id="booking-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h3 class="mb-20">Booking successfully!</h3>
                            <div class="mb-30 text-center">
                                <img src="<?php echo site_url(); ?>public/backend/vendors/images/success.png">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                Done
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Booking successfully modal -->

            <!-- footer -->
            <div class="footer-wrap pd-20 mb-20 card-box mt-6">
                Template design By
                <a href="https://github.com/dropways" target="_blank">Ritika</a>
            </div>
            <!-- /footer -->
        </div>

    </div>
    </div>
</body>
<?php include ('template/dashboard-footer.php'); ?>