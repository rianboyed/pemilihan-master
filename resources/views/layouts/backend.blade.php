<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('backend/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/pages/card-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                    <i class="ficon feather icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-bell"></i>
                                <span class="badge badge-pill badge-primary badge-up">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-plus-square font-medium-5 primary"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6>
                                                <small class="notification-text"> Are your going to meet me tonight?
                                                </small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-download-cloud font-medium-5 success"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.
                                                </small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-alert-triangle font-medium-5 danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6>
                                                <small class="notification-text">Server have 99% CPU usage.</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-check-circle font-medium-5 info"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6>
                                                <small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                            </small>
                                        </div>
                                    </a>
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <i class="feather icon-file font-medium-5 warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6>
                                                <small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">{{auth::user()->name}}</span>
                                    <span class="user-status">{{auth::user()->status}}</span>
                                </div>
                                <span>
                                    <img class="round" src="{{asset('backend/images/profile/user-uploads/user-09.jpg')}}" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="">
                                    <i class="feather icon-user"></i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="feather icon-mail"></i> My Inbox
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="feather icon-check-square"></i> Task
                                </a>
                                <a class="dropdown-item" href=""><i class="feather icon-message-square"></i> Chats
                                </a>
                                <div class="dropdown-divider"></div>
                                
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								    <i class="feather icon-power"></i> Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST">
									@csrf
								</form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">E-Pemira</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="active nav-item">
                    <a href="/home"><i class="feather icon-home"></i>
                        <span class="menu-title" data-i18n="Email">Dashboard</span>
                    </a>
                </li>
               
                <li class=" nav-item"><a href="#"><i class="feather icon-user-plus"></i><span class="menu-title">Data Calon</span></a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{route('calon.index')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Shop">Calon</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('calon.create')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Details">Add Calon</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-user-check"></i><span class="menu-title">Data Pasangan</span></a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{route('pasangan.index')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Shop">Pasangan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pasangan.create')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Details">Add Pasangan</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title">Data Pemilih</span></a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{url('pemilih-aktif')}}"><i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Shop">Pemilih Aktif</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/urutan"><i class=" feather icon-plus"></i>
                        <span class="menu-title" data-i18n="Email">Nomor Urut Paslon</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/"><i class="feather icon-monitor"></i>
                        <span class="menu-title" data-i18n="Email">Frontend</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Support</span>
                </li>
                <li class=" nav-item"><a href="/dokumentasi/grafik"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               @yield('content')

               
            </div>
        </div>
    </div>
    <!-- END: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25"> 2020 - Sofyan Ali</span>
            <span class="float-md-right d-none d-md-block">Build with<i class="feather icon-heart pink"></i>
            </span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i>
            </button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/js/core/app.js')}}"></script>
    <script src="{{asset('backend/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{asset('backend/js/scripts/swal/sweetalert2.all.min.js')}}"></script>
    <!-- END: Page JS-->

    <!--Grafik-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        @include('sweetalert::alert')

    <!--end grafik-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.zero-configuration').DataTable();
        });
    </script>
 
    @yield('scripts')
</body>
<!-- END: Body-->

</html>