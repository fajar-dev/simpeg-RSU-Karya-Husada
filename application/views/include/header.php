<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>images/favicon.png">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/owl-carousel/css/owl.theme.default.min.css">
    <!-- Clockpicker -->
    <link href="<?= base_url() ?>vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="<?= base_url() ?>vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="<?= base_url() ?>vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?= base_url() ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/select2/css/select2.min.css">

    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url() ?>assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?= base_url() ?>assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?= base_url() ?>assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                </span>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <div class="dropdown-menu dropdown-menu-right">
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url() ?>page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Menu</li>
                    <li>
                      <a href="<?= base_url('user') ?>" aria-expanded="false"><i class="icon icon-app-store"></i>
                        <span class="nav-text">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i>
                        <span class="nav-text">Master data</span>
                      </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url() ?>">Unit Kerja</a></li>
                            <li><a href="<?= base_url() ?>index.html">Shift</a></li>
                            <li><a href="<?= base_url() ?>index2.html">Pegawai</a></li>
                        </ul>
                    </li>
                    <li>
                      <a href="<?= base_url() ?>" aria-expanded="false"><i class="icon icon-single-copy-06"></i>
                        <span class="nav-text">Rekap</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?= base_url() ?>" aria-expanded="false"><i class="icon icon-single-04"></i>
                        <span class="nav-text">User</span>
                      </a>
                    </li>

                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
