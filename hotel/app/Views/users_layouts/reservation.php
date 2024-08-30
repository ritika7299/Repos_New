<?php include('template/dashboard-header.php'); ?>

<body>
    <!-- loader -->
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/home-loading.png" alt="" />
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
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo7.jpg" alt="">
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
            <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg"
                        alt=""></a>
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
            <!--/customer and bookings details -->
            <!-- table of rooms -->
            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">User List</div>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="data-table table nowrap dataTable no-footer dtr-inline"
                                id="DataTables_Table_0" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="table-plus sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                            Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Gender: activate to sort column ascending">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Weight: activate to sort column ascending">Mobile
                                            No.
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Assigned Doctor: activate to sort column ascending">
                                            Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Admit Date: activate to sort column ascending">
                                            Check-In</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Disease: activate to sort column ascending">
                                            Check-Out
                                        </th>
                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="table-plus sorting_1" tabindex="0">
                                            <div class="name-avatar d-flex align-items-center">
                                                <div class="txt">
                                                    <div class="weight-600">Christian Dyer</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>dyer@gmail.com</td>
                                        <td>9958311017</td>
                                        <td>H.no. 40 Post office wali gali, Bazaria, Ghaziabad</td>
                                        <td>16-08-2024</td>
                                        <td>
                                            18-08-2024
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                        class="icon-copy dw dw-edit2"></i></a>
                                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                        class="icon-copy dw dw-delete-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus sorting_1" tabindex="0">
                                            <div class="name-avatar d-flex align-items-center">
                                                <div class="txt">
                                                    <div class="weight-600">Doris L. Larson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>dyer@gmail.com</td>
                                        <td>9958311017</td>
                                        <td>H.no. 40 Post office wali gali, Bazaria, Ghaziabad</td>
                                        <td>16-08-2024</td>
                                        <td>
                                            18-08-2024
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                        class="icon-copy dw dw-edit2"></i></a>
                                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                        class="icon-copy dw dw-delete-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="table-plus sorting_1" tabindex="0">
                                            <div class="name-avatar d-flex align-items-center">
                                                <div class="txt">
                                                    <div class="weight-600">Doris L. Larson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>dyer@gmail.com</td>
                                        <td>9958311017</td>
                                        <td>H.no. 40 Post office wali gali, Bazaria, Ghaziabad</td>
                                        <td>16-08-2024</td>
                                        <td>
                                            18-08-2024
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                        class="icon-copy dw dw-edit2"></i></a>
                                                <a href="#" data-color="#e95959" style="color: rgb(233, 89, 89);"><i
                                                        class="icon-copy dw dw-delete-3"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7"></div>
                        <!-- <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                            data-dt-idx="0" tabindex="0" class="page-link"><i
                                                class="ion-chevron-left"></i></a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                            class="page-link"><i class="ion-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /table of rooms -->
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
            <div class="footer-wrap pd-20 mb-20 card-box mt-3">
                Template design By
                <a href="https://github.com/dropways" target="_blank">Ritika</a>
            </div>
            <!-- /footer -->
        </div>

    </div>
    </div>
</body>
<?php include('template/dashboard-footer.php'); ?>