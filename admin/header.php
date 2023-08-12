<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location:login.php");

}

$data = $_SESSION['admin'];


?>
<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 08:42:23 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Admin Pannel</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <!-- END: Page CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="dist/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">

    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <div class="loader"></div>
    </div>
    <!-- END: Pre Loader-->

    <!-- START: Header-->
    <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                    <a href="index.html" class="horizontal-logo text-left">
                        <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">Admin Pannel</span>
                    </a>
                </div>


                <!--  <form class="float-left d-none d-lg-block search-form">
                    <div class="form-group mb-0 position-relative">
                        <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                        </a>

                    </div>

                </form>
-->
                <div class="navbar-right ml-auto h-100">

                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">

                        <li class="d-inline-block align-self-center  d-block d-lg-none">
                            <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i
                                    class="icon-magnifier h4"></i>
                            </a>
                        </li>

                        <!-- <li class="dropdown align-self-center">
                            <a href="index.php" >
                                <button type="button" class="btn btn-warning" >Back To Home</button>
                            </a>


                            

                        </li>
                        <li class="dropdown align-self-center d-inline-block">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                                <span class="badge badge-default"> <span class="ring">
                                    </span><span class="ring-point">
                                    </span> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border   py-0">
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                            <div class="media-body">
                                                <p class="mb-0 text-success">john send a message</p>
                                                12 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-danger">Peter send a message</p>
                                                15 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                        <div class="media">
                                            <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-warning">Bill send a message</p>
                                                5 min ago
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                            </ul>
                        </li>
-->
                        <li class="dropdown user-profile align-self-center d-inline-block">
                            <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                                <div class="media">
                                    <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle"
                                        width="29">
                                </div>
                            </a>

                            <div class="dropdown-menu border dropdown-menu-right p-0">
                                <!--  <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
-->
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END: Header-->
    <!-- START: Main Menu-->
    <div class="sidebar">
        <div class="site-width">
            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active">
                    <ul>
                        <li class="active"><a href="index.php"><i class="icon-layers"></i> Dashboard</a></li>

                        <li><a href="all-products.php"><i class="icon-layers"></i> All products</a></li>
                        <li><a href="category.php"><i class="icon-layers"></i> Categories</a></li>
                        <!--  <li><a href="#"><i class="icon-layers"></i> Orders</a></li>-->
                        <li><a href="comments.php"><i class="icon-layers"></i> comments</a></li>

                    </ul>
                </li>

            </ul>
            <!-- END: Menu-->
            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- END: Main Menu-->