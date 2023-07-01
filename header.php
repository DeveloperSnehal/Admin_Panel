<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Tocly - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/mygenic_favicon.png">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



</head>

<body data-sidebar="colored">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">



        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <!-- <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-dark.png" alt="logo-sm-dark" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm-dark.png" alt="logo-dark" height="25">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-light.png" alt="logo-sm-light" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm-light.png" alt="logo-light" height="25">
                            </span>
                        </a>
                    </div> -->

                    <button type="button"
                        class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- start page title -->
                    <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Dashboard</h4>
                    </div>
                    <!-- end page title -->
                </div>

                <div class="d-flex">

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/mygenic_favicon.png" alt="logo-sm-light" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/mygenic_logo.png" alt="logo-light" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
                id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <div data-simplebar class="vertical-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
                        <button type="button" class="btn btn-light w-100 waves-effect waves-light border-0"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xs rounded-circle flex-shrink-0">
                                        <div
                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase user-sort-name">
                                            MG</div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 text-start">
                                    <h6 class="mb-1 fw-medium user-name-text"> Mygenic Healthcare </h6>
                                    <p class="font-size-13 text-muted user-name-sub-text mb-0"> Web Site Link </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <i class="mdi mdi-chevron-down font-size-16"></i>
                                </div>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end w-100">
                            <!-- item-->
                            <a class="dropdown-item d-flex align-items-center px-3" href="https://mygenichealthcare.com/">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs rounded-circle flex-shrink-0">
                                        <div
                                            class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                                            MG</div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 dropdown-name">MyGenic Healthcare</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="uim uim-airplay"></i><span
                                    class="badge rounded-pill bg-success float-end">3</span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uim uim-box"></i>
                                <span>Product Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Add Product</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                        <li><a href="email-read.html">Read Email</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uim uim-chart-pie"></i>
                                <span>Category Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">Add Category</a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="email-inbox.html">Inbox</a></li>
                                        <li><a href="email-read.html">Read Email</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uim uim-sign-in-alt"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html">Login</a></li>
                                <li><a href="auth-register.html">Register</a></li>
                                <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>

            <div class="dropdown px-3 sidebar-user sidebar-user-info">
                <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-2.jpg"
                                class="img-fluid header-profile-user rounded-circle" alt="">
                        </div>

                        <div class="flex-grow-1 ms-2 text-start">
                            <span class="ms-1 fw-medium user-name-text">Steven Deese</span>
                        </div>

                        <div class="flex-shrink-0 text-end">
                            <i class="mdi mdi-dots-vertical font-size-16"></i>
                        </div>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="pages-profile.html"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="pages-faq.html"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile.html"><i
                            class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i
                            class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="auth-lock-screen.html"><i
                            class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Lock screen</span></a>
                </div>
            </div>

        </div>
        <!-- Left Sidebar End -->




