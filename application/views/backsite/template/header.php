<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="<?=base_url('')?>assets/images/favicon.ico">

        <link rel="stylesheet" href="<?=base_url('')?>assets/plugins/morris/morris.css">

        <link href="<?=base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('')?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('')?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url('')?>assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url('')?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
		
		<link href="<?=base_url('')?>assets/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
		<link href="<?=base_url('')?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
		<!-- DataTables -->
		<link href="<?=base_url('')?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('')?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?=base_url('')?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        SMK ALMAHRUSIYAH
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0"> 
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> 
                        </li>

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
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
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
