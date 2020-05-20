<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @yield('title')
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" href="morris/morris.css">
    <link href="bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <link href="select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables-->
    <link href="datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <link href="bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- Alertify JS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!--Font Awesome-->
</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                        <span>
                            <img src="images/logo.png" alt="" height="24">
                        </span>
                <i>
                    <img src="images/logo-sm.png" alt="" height="22">
                </i>
            </a>
        </div>

        <nav class="navbar-custom">

            <ul class="navbar-right d-flex list-inline float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-pill badge-info noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications (37)
                        </h6>
                        <div class="slimscroll notification-item-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="images/users/user-4.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="{{ route('adminadmin.dashboard') }}" class="waves-effect">
                            <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/office/15/000000/categorize.png"/><span> Categories <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('admincategories.index') }}"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  All Categories</a></li>
                            <li class="category-add"><a href="javascript:void(0)"><img src="https://img.icons8.com/nolan/15/plus-math.png"/>  Add new</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/ultraviolet/15/000000/new-product.png"/><span> Products <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('adminproducts.index') }}"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  All Products</a></li>
                            <li><a href="email-read.html"><img src="https://img.icons8.com/nolan/15/plus-math.png"/>  Add new</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/windows/15/000000/user-male-circle.png"/><span> Users <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('adminusers.index') }}"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  All Users</a></li>
                            <li><a href="email-read.html"><img src="https://img.icons8.com/nolan/15/plus-math.png"/>  Add new</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/cotton/15/000000/bill--v1.png"/><span> Orders <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('adminget.all.orders') }}"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  All Orders</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/cotton/15/000000/report-file--v1.png"/><span> Reports <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  Daily report</a></li>
                            <li><a href="email-inbox.html"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  Weekly report</a></li>
                            <li><a href="email-inbox.html"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  Monthly report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><img src="https://img.icons8.com/ultraviolet/15/000000/starred-ticket.png"/><span> Vouchers <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html"><img src="https://img.icons8.com/cotton/15/000000/list--v2.png"/>  All Bills</a></li>
                            <li><a href="email-read.html"><img src="https://img.icons8.com/nolan/15/plus-math.png"/>  Add new</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content')

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/metisMenu.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/waves.min.js"></script>

<script src="jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- App js -->
<script src="js/app.js"></script>

<script src="{{ asset('js/admin/app.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
@yield('script')
</body>

</html>
