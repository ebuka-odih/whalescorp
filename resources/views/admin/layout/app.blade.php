<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">

    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->



<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
            <div class="bg-primary-op">
                <div class="content-header">
                    <!-- User Avatar -->
                    <a class="img-link me-1" href="">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ms-2">
                        <a class="text-white fw-semibold" href="">{{ auth()->user()->fullname() }}</a>
                        <div class="text-white-75 fs-sm">Full Stack Developer</div>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
            </div>
        </div>
        <!-- END Side Header -->


    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->

    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                    <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </button>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                        <i class="far fa-moon" id="dark-mode-toggler"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('admin.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('user.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Client Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Transaction</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.deposit') }}">
                            <i class="nav-main-link-icon fa fa-arrow-circle-down"></i>
                            <span class="nav-main-link-name">Deposits</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.withdrawal') }}">
                            <i class="nav-main-link-icon fa fa-arrow-circle-up"></i>
                            <span class="nav-main-link-name">Withdrawal</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Trades</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.trades.open') }}">
                                    <span class="nav-main-link-name">Open Trades</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.trades.close') }}">
                                    <span class="nav-main-link-name">Close Trades</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.subscription.create') }}">
                            <i class="nav-main-link-icon fa fa-users-slash"></i>
                            <span class="nav-main-link-name">Subscribers</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Subscription</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.subscription.create') }}">
                            <i class="nav-main-link-icon fa fa-tools"></i>
                            <span class="nav-main-link-name">Subscription</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">User</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.users') }}">
                            <i class="nav-main-link-icon fa fa-user-circle"></i>
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.message') }}">
                            <i class="nav-main-link-icon fa fa-envelope"></i>
                            <span class="nav-main-link-name">Send Message</span>
                        </a>
                    </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.fund') }}">
                            <i class="nav-main-link-icon fa fa-plus-circle"></i>
                            <span class="nav-main-link-name">Add Fund</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Settings</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.wallet.create') }}">
                            <i class="nav-main-link-icon fa fa-wallet"></i>
                            <span class="nav-main-link-name">Add Wallet</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main"  href="{{ route('admin.security') }}">
                            <i class="nav-main-link-icon fa fa-shield-alt"></i>
                            <span class="nav-main-link-name">Change Password</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="{{ route('admin.security') }}" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="far fa-fw fa-building me-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->


            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->





<script src="{{ asset("admin/assets/js/dashmix.app.min.js") }}"></script>
<!-- Page JS Plugins -->
<script src="{{ asset("admin/assets/js/plugins/chart.js/chart.min.js") }}"></script>

<!-- Page JS Code -->
<script src="{{ asset("admin/assets/js/pages/be_pages_dashboard.min.js") }}"></script>
<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>

</body>
</html>

