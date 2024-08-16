<?php include('template/dashboard-header.php'); ?>

<body>
    <!-- loader -->
    <div class="pre-loader">
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
    <!-- main-container -->
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Add Rooms</h2>
            </div>
            <div class="row pb-10">
                <div class="col-md-8 mb-20">
                    <div class="card-box height-100-p pd-20" style="position: relative;">
                        <div class="flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
                            <!-- form-area -->
                            <div id="guest-information" class="guest-information" data-highcharts-chart="1">
                                <form>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select Room ID</option>
                                            <option id="F101">F1101</option>
                                            <option id="F201">F2201</option>
                                            <option id="F301">F3301</option>
                                            <option id="F401">F4401</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select Room Type</option>
                                            <option id="vo">Single</option>
                                            <option id="ac">Deluxe</option>
                                            <option id="pc">Superior</option>
                                            <option id="pp">Double Deluxe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select Meal</option>
                                            <option id="vo">Breakfast</option>
                                            <option id="ac">Lunch</option>
                                            <option id="pc">Dinner</option>
                                            <option id="pc">Full Meal</option>
                                            <option id="pc">None</option>
                                        </select>
                                    </div>
                                    <div class=" form-group">
                                        <select class="form-control">
                                            <option placeholder="">Select Room No.</option>
                                            <option id="F101">F1-101</option>
                                            <option id="F102">F1-102</option>
                                            <option id="F103">F1-103</option>
                                            <option id="F201">F2-201</option>
                                            <option id="F202">F2-202</option>
                                            <option id="F203">F2-203</option>
                                            <option id="F301">F3-301</option>
                                            <option id="F302">F3-302</option>
                                            <option id="F303">F3-303</option>
                                            <option id="F401">F4-401</option>
                                            <option id="F402">F4-402</option>
                                            <option id="F403">F4-403</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="actions clearfix">
                                <a class="btn btn-primary float-right mt-2" href="#finish" role="menuitem"
                                    data-toggle="modal" data-target="#Add-room-modal">Add
                                    <i class="icon-copy fa fa-paper-plane" aria-hidden="true"></i></a>
                            </div>
                            <!-- form-area -->
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1020px; height: 421px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-20">
                    <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64"
                        style="background-color: rgb(69, 90, 100);">
                        <div class="d-flex justify-content-between pb-20 text-white">
                            <div class="icon h1 text-white">
                                <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                <i class="icon-copy fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="text-white">
                                <div class="font-14">Room Availability Status</div>
                                <div class="font-24 weight-500">12</div>
                            </div>
                            <div class="max-width-150" style="position: relative;">
                                <div id="appointment-chart" style="min-height: 70px;">
                                    <div id="apexcharts7a5f28"
                                        class="apexcharts-canvas apexcharts7a5f28 apexcharts-theme-light"
                                        style="width: 150px; height: 70px;"><svg id="SvgjsSvg2300" width="150"
                                            height="70" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG2302" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2301">
                                                    <linearGradient id="SvgjsLinearGradient2305" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop2306" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop2307" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop2308" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMask7a5f28">
                                                        <rect id="SvgjsRect2310" width="154" height="70" x="-2" y="0"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask7a5f28">
                                                        <rect id="SvgjsRect2311" width="152" height="72" x="-1" y="-1"
                                                            rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect2309" width="5.357142857142857" height="70" x="0"
                                                    y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient2305)" opacity="1"
                                                    stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                                    y2="70" filter="none" fill-opacity="0.9"></rect>
                                                <g id="SvgjsG2323" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2324" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 2.75)"></g>
                                                </g>
                                                <g id="SvgjsG2326" class="apexcharts-grid">
                                                    <g id="SvgjsG2327" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2329" x1="0" y1="0" x2="150" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2330" x1="0" y1="17.5" x2="150" y2="17.5"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2331" x1="0" y1="35" x2="150" y2="35"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2332" x1="0" y1="52.5" x2="150" y2="52.5"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2333" x1="0" y1="70" x2="150" y2="70"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2328" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2335" x1="0" y1="70" x2="150" y2="70"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine2334" x1="0" y1="1" x2="0" y2="70"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG2313" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG2314" class="apexcharts-series" rel="1"
                                                        seriesName="Week" data:realIndex="0">
                                                        <path id="SvgjsPath2316"
                                                            d="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                            fill="rgba(0,143,251,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 8.035714285714285 70L 8.035714285714285 18.839285714285715Q 10.714285714285714 16.16071428571429 13.392857142857142 18.839285714285715L 13.392857142857142 70L 8.035714285714285 70"
                                                            pathFrom="M 8.035714285714285 70L 8.035714285714285 70L 13.392857142857142 70L 13.392857142857142 70L 8.035714285714285 70"
                                                            cy="17.5" cx="29.46428571428571" j="0" val="21"
                                                            barHeight="52.5" barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2317"
                                                            d="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                            fill="rgba(0,227,150,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 29.46428571428571 70L 29.46428571428571 16.339285714285715Q 32.14285714285714 13.660714285714286 34.82142857142857 16.339285714285715L 34.82142857142857 70L 29.46428571428571 70"
                                                            pathFrom="M 29.46428571428571 70L 29.46428571428571 70L 34.82142857142857 70L 34.82142857142857 70L 29.46428571428571 70"
                                                            cy="15" cx="50.89285714285714" j="1" val="22" barHeight="55"
                                                            barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2318"
                                                            d="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                            fill="rgba(254,176,25,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 50.89285714285714 70L 50.89285714285714 46.339285714285715Q 53.57142857142857 43.660714285714285 56.24999999999999 46.339285714285715L 56.24999999999999 70L 50.89285714285714 70"
                                                            pathFrom="M 50.89285714285714 70L 50.89285714285714 70L 56.24999999999999 70L 56.24999999999999 70L 50.89285714285714 70"
                                                            cy="45" cx="72.32142857142857" j="2" val="10" barHeight="25"
                                                            barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2319"
                                                            d="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70"
                                                            fill="rgba(255,69,96,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 72.32142857142857 70L 72.32142857142857 1.3392857142857142Q 75 -1.3392857142857142 77.67857142857143 1.3392857142857142L 77.67857142857143 70L 72.32142857142857 70"
                                                            pathFrom="M 72.32142857142857 70L 72.32142857142857 70L 77.67857142857143 70L 77.67857142857143 70L 72.32142857142857 70"
                                                            cy="0" cx="93.75" j="3" val="28" barHeight="70"
                                                            barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2320"
                                                            d="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70"
                                                            fill="rgba(119,93,208,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 93.75 70L 93.75 31.339285714285715Q 96.42857142857143 28.66071428571429 99.10714285714286 31.339285714285715L 99.10714285714286 70L 93.75 70"
                                                            pathFrom="M 93.75 70L 93.75 70L 99.10714285714286 70L 99.10714285714286 70L 93.75 70"
                                                            cy="30" cx="115.17857142857143" j="4" val="16"
                                                            barHeight="40" barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2321"
                                                            d="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                            fill="rgba(0,143,251,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 115.17857142857143 70L 115.17857142857143 18.839285714285715Q 117.85714285714286 16.16071428571429 120.53571428571429 18.839285714285715L 120.53571428571429 70L 115.17857142857143 70"
                                                            pathFrom="M 115.17857142857143 70L 115.17857142857143 70L 120.53571428571429 70L 120.53571428571429 70L 115.17857142857143 70"
                                                            cy="17.5" cx="136.60714285714286" j="5" val="21"
                                                            barHeight="52.5" barWidth="5.357142857142857"></path>
                                                        <path id="SvgjsPath2322"
                                                            d="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                            fill="rgba(0,227,150,0.85)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMask7a5f28)"
                                                            pathTo="M 136.60714285714286 70L 136.60714285714286 38.839285714285715Q 139.28571428571428 36.160714285714285 141.96428571428572 38.839285714285715L 141.96428571428572 70L 136.60714285714286 70"
                                                            pathFrom="M 136.60714285714286 70L 136.60714285714286 70L 141.96428571428572 70L 141.96428571428572 70L 136.60714285714286 70"
                                                            cy="37.5" cx="158.03571428571428" j="6" val="13"
                                                            barHeight="32.5" barWidth="5.357142857142857"></path>
                                                    </g>
                                                    <g id="SvgjsG2315" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2336" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2337" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2338" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2339" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2340" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG2325" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(0, 143, 251);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 151px; height: 71px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table of rooms -->
            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">Add Room List</div>
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
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Gender: activate to sort column ascending">Room ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Weight: activate to sort column ascending">Room Type
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Assigned Doctor: activate to sort column ascending">
                                            Meal</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Admit Date: activate to sort column ascending">Room
                                            No.</th>
                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td>F1101</td>
                                        <td>Deluxe</td>
                                        <td>Full Board</td>
                                        <td>F1-101</td>
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
            <!-- Added successfully modal -->
            <div class="modal fade" id="Add-room-modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h3 class="mb-20">Add Room successfully!</h3>
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
            <!-- /Added successfully modal -->

            <div class="fixed-bottom footer-wrap pd-20 mb-20 card-box mt-3">
                Hotel theme design-by
                <a href="https://github.com/dropways" target="_blank">Ritika</a>
            </div>
        </div>

    </div>
    </div>
</body>
<?php include('template/dashboard-footer.php'); ?>