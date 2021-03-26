
<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Colored Sidebar | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body data-sidebar="colored">
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('admin/assets/images/logo.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('admin/assets/images/logo-light.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('admin/assets/images/users/avatar-1.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.html" key="t-default">Default</a></li>
                                    <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                                    <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                                    <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-light-sidebar.html" key="t-light-sidebar">Light Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                                            <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                                            <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored Sidebar</a></li>
                                            <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar light</a></li>
                                            <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Boxed width</a></li>
                                            <li><a href="layouts-hori-preloader.html" key="t-preloader">Preloader</a></li>
                                            <li><a href="layouts-hori-colored-header.html" key="t-colored-topbar">Colored Header</a></li>
                                            <li><a href="layouts-hori-scrollable.html" key="t-scrollable">Scrollable</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Colored Sidebar</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                            <li class="breadcrumb-item active">Colored Sidebar</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary bg-soft">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p>Skote Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="{{asset('admin/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">Henry Price</h5>
                                                <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">125</h5>
                                                            <p class="text-muted mb-0">Projects</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">$1245</h5>
                                                            <p class="text-muted mb-0">Revenue</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted fw-medium">Orders</p>
                                                        <h4 class="mb-0">1,235</h4>
                                                    </div>

                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted fw-medium">Revenue</p>
                                                        <h4 class="mb-0">$35, 723</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted fw-medium">Average Price</p>
                                                        <h4 class="mb-0">$16.2</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <div class="rightbar-overlay"></div>
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>
        <script src="{{asset('admin/assets/js/app.js')}}"></script>
    </body>
</html>
