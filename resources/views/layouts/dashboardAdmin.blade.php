<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link href="{{ asset('dashboard/css/animate.css')}}" id="theme" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="{{ asset('dashboard/css/spinners.css')}}" id="theme" rel="stylesheet">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('dashboard/css/icon-page.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('dashboard/css/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <link href="{{ asset('dashboard/css/font-awesome.min.css')}}" id="theme" rel="stylesheet">
     <link href="{{ asset('dashboard/css/update.css')}}" id="theme" rel="stylesheet">
    
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        {{ Auth::user()->name }}
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!--img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" /-->
                            <!-- Light Logo icon -->
                            <!--img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /-->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <!--img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" /-->
                         <!-- Light Logo text -->    
                         <!--img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /--></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="{{ url('auth/logout') }}" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-down">تسجيل الخروج  <i class="fa fa-sign-out"> </i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><span class="hide-menu"> لوحة لبتحكم </span> <i class="fa fa-tachometer"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><span class="hide-menu"> الملف الشخصي </span> <i class="fa fa-user-circle-o"> </i></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><span class="hide-menu"> جدول المهام </span> <i class="fa fa-table"> </i></a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                 @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('dashboard/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboard/js/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dashboard/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dashboard/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dashboard/js/custom.min.js')}}"></script>
</body>

</html>
