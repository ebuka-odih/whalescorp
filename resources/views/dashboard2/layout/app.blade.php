
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypo</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="dark">
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('index') }}">
            <h2 style="font-weight: bolder; color: #1288c9 !important">PrepStation</h2>

            {{--            <img src="{{ asset('assets/img/logo-light.svg') }}" alt="logo">--}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
                aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ route('user.dashboard') }}"  aria-haspopup="true"
                       aria-expanded="false">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ route('user.trade') }}"  aria-haspopup="true"
                       aria-expanded="false">
                        Trade Room
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ route('user.trade.history') }}"  aria-haspopup="true"
                       aria-expanded="false">
                        Trade History
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ route('user.deposit') }}"  aria-haspopup="true"
                       aria-expanded="false">
                        Deposits
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ route('user.withdraw') }}"  aria-haspopup="true"
                       aria-expanded="false">
                        Withdrawal
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transactions
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('user.deposit.transactions') }}">Deposits</a>
                        <a class="dropdown-item" href="{{ route('user.withdraw.transactions') }}">Withdrawals</a>
                        <a class="dropdown-item" href="settings-dark.html">Funding</a>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-custom-icon">
                    <a class="nav-link" href="#" id="clickFullscreen">
                        <i class="icon ion-md-expand"></i>
                    </a>
                </li>
                <li class="nav-item dropdown header-custom-icon">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="icon ion-md-notifications"></i>
                        <span class="circle-pulse"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">6 New Notifications</p>
                            <a href="#!" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            <a href="#!" class="dropdown-item">
                                <div class="icon">
                                    <i class="icon ion-md-lock"></i>
                                </div>
                                <div class="content">
                                    <p>Account password change</p>
                                    <p class="sub-text text-muted">5 sec ago</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown header-img-icon">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img src="{{ asset('assets/img/avatar.svg') }}" alt="avatar">
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                <img src="{{ asset('assets/img/avatar.svg') }}" alt="">
                            </div>
                            <div class="info text-center">
                                <p class="name font-weight-bold mb-0">Tony Stark</p>
                                <p class="email text-muted mb-3">tonystark@gmail.com</p>
                            </div>
                        </div>
                        <div class="dropdown-body">
                            <ul class="profile-nav">
                                <li class="nav-item">
                                    <a href="settings-profile-dark.html" class="nav-link">
                                        <i class="icon ion-md-person"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="settings-wallet-dark.html" class="nav-link">
                                        <i class="icon ion-md-wallet"></i>
                                        <span>My Wallet</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="settings-dark.html" class="nav-link">
                                        <i class="icon ion-md-settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link red" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon ion-md-power"></i>
                                        <span>Log Out</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>--}}
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    $('tbody, .market-news ul').mCustomScrollbar({
        theme: 'minimal',
    });
</script>
</body>


<!-- Mirrored from crypo.netlify.app/exchange-dark-fluid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 03:06:32 GMT -->
</html>
