
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/favicon.ico">

    <title>Dashboard | Whales Corp</title>
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    <header class="main-header">
        <div class="d-flex align-items-center logo-box pl-20">
            <a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
            </a>
            <!-- Logo -->
            <a href="{{ route('index') }}" class="logo">
                <!-- logo-->
                <div class="logo-lg">
                    <h3 class="mt-3" style="font-weight: bolder; color: #1288c9 !important">Whales Corp</h3>

                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top pl-10">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-md-none">
                        <a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>

                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/notifications.svg" class="img-fluid svg-icon" alt="">
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                            <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/user.svg" class="rounded svg-icon" alt="" />
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <!-- User image -->
                            <li class="user-header bg-img" style="background-image: url(https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/user-info.jpg)" data-overlay="3">
                                <div class="flexbox align-self-center">
                                    <img src="" class="float-left rounded-circle" alt="User Image">
                                    <h4 class="user-name align-self-center">
                                        <span>{{ auth()->user()->name }}</span>
                                        <small>{{ auth()->user()->email }}</small>
                                    </h4>
                                </div>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ion ion-person"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('user.editProfile') }}"><i class="ion ion-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ion-log-out"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="">
                            <a href="{{ route('user.dashboard') }}">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/dashboard.svg" class="svg-icon" alt="">
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('user.deposit') }}">
                                <i class="fa fa-arrow-circle-down text-primary"></i>
                                <span>Deposit</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('user.withdraw') }}">
                                <i class="fa fa-arrow-circle-up text-primary"></i>
                                <span>Withdraw</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('user.trade') }}">
                                <i class="fa fa-area-chart text-primary"></i>
                                <span>Trade Room</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('user.sub.plans') }}">
                                <i class="fa fa-dollar text-primary"></i>
                                <span>Subscribe</span>
                            </a>
                        </li>
                        <li class="header">History </li>
                        <li class="treeview">
                            <a href="#">
                                <img src="https://crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/images/svg-icon/sidebar-menu/authentication.svg" class="svg-icon" alt="">
                                <span>Transactions</span>
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('user.deposit.transactions') }}"><i class="ti-more"></i>Deposits</a></li>
                                <li><a href="{{ route('user.withdraw.transactions') }}"><i class="ti-more"></i>Withdrawals</a></li>
{{--                                <li><a href="auth_register.html"><i class="ti-more"></i></a></li>--}}
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('user.trade.history') }}">
                                <i class="fa fa-history text-primary"></i>
                                <span>Trade History</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('user.sub.history') }}">
                                <i class="fa fa-anchor text-primary"></i>
                                <span>Subscriptions</span>
                            </a>
                        </li>


                        <li class="header">User</li>
                        <li class="">
                            <a href="{{ route('user.profile') }}">
                                <i class="fa fa-user-circle text-primary"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('user.message.index') }}">
                                <i class="fa fa-envelope text-primary"></i>
                                <span>Messages <span class="badge badge-danger">{{ auth()->user()->messageCount() }}</span></span>
                            </a>
                        </li>
{{--                        <li class="">--}}
{{--                            <a href="{{ route('user.withdraw') }}">--}}
{{--                                <i class="fa fa-shield text-primary"></i>--}}
{{--                                <span>Security</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                    </ul>
                </div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
   @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">

        </div>
        &copy; 2020 <a href="https://www.Whales Corp.co/">Whales Corp</a>. All Rights Reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>


<!-- Crypto Tokenizer Admin App -->
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/dashboard10.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="//code.tidio.co/a6ctwkykhhr6qctwa83f6rowtjz4ue38.js" async></script>
{{--<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b8ebdac5-f32d-49fd-be44-618688cfd7c2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>--}}
</body>

<!-- Mirrored from crypto-tokenizer-admin-dashboard.multipurposethemes.com/bs4/main-dark/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 20:51:19 GMT -->
</html>
