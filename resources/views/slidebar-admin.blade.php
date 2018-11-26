<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo text-logo" href="{{route('dashboard')}}">
                    Double C
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('products-management')}}"><i class="fas fa-certificate"></i>Product Management</a>
                </li>
                <li>
                    <a href="{{route('order-product')}}"><i class="fas fa-shopping-cart"></i>Order Management</a>
                </li>
                <li>
                    <a href="{{route('member-management')}}"><i class="fas fa-users"></i>Member Management</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a class="text-logo" href="{{route('dashboard')}}">
            Double C
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('products-management')}}"><i class="fas fa-certificate"></i>Product Management</a>
                </li>
                <li>
                    <a href="{{route('order-product')}}"><i class="fas fa-shopping-cart"></i>Order Management</a>
                </li>
                <li>
                    <a href="{{route('member-management')}}"><i class="fas fa-users"></i>Member Management</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap float-right">
                    <div class="header-button">
                        <div class="noti-wrap">
                        </div>
                        @if(Auth::check())
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{url('admin/images/icon/avatar-01.jpg')}}" alt="{{Auth::user()->full_name}}" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="">{{Auth::user()->full_name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="">
                                                <img src="{{url('admin/images/icon/avatar-01.jpg')}}" alt="{{Auth::user()->full_name}}" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="">{{Auth::user()->full_name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('logout')}}"><i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->