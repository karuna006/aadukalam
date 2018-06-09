<?php 
include_once '../controller/common_functions.php';
// print_r($_SESSION['user_details']);
landing_page_session_check();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="../img/favicon.ico"/>
    <link type="text/css" href="../css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" href="../css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
    <!-- end of global css -->
</head>

<body class="skin-default">
<!-- <div class="preloader">
    <div class="loader_img"><img src="../img/loader.gif" alt="loading..." height="64" width="64"></div>
</div> -->
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="home.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="../img/logo.png" alt="logo"/>
        </a>
        
        <div>
            <a href="javascript:void(0)" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw ti-menu"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul>
                <a href="../controller/logout.php" style="color:white;font-size: x-large;padding-right: 30px;";>logout</a>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile"></div>
                <ul class="navigation">
                    <li>
                        <a href="edit_home.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Home page</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_product.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Add Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_product.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">View Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="purchase_details.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Purchase Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_location.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Add location</span>
                        </a>
                    </li>
                     <li>
                        <a href="add_sub_category.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Add Subcategory</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_package_type.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Add Package Type</span>
                        </a>
                    </li>

                         <li>
                        <a href="add_aboutus.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">About us</span>
                        </a>
                    </li>

               
                     <li>
                        <a href="edit_farms.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Farms</span>
                        </a>
                    </li>


                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content">
