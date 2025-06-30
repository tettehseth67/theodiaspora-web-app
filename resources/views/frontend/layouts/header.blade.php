<header>
    <!--Mobile Header-->
    <div class="mobile-header bg-white typo-dark">
        <div class="mobile-header-inner">
            <div class="sticky-outer">
                <div class="sticky-head">
                    <div class="basic-container clearfix">
                        <ul class="nav mobile-header-items pull-left">
                            <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a>
                            </li>
                        </ul>
                        <ul class="nav mobile-header-items pull-center">
                            <li>
                                <a href="index.html" class="img-before"><img src="images/logo-dark.png"
                                        class="img-fluid" width="149" height="45" alt="Logo"></a>
                            </li>
                        </ul>
                        <ul class="nav mobile-header-items pull-right">
                            <li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i
                                        class="icon-magnifier icons"></i></a></li>
                        </ul>
                    </div>
                    <!-- .basic-container -->
                </div>
                <!-- .sticky-head -->
            </div>
            <!-- .sticky-outer -->
        </div>
        <!-- .mobile-header-inner -->
    </div>
    <!-- .mobile-header -->
    <!--Header-->
    <div class="header-inner header-1 header-absolute">
        <!--Topbar-->
        <div class="topbar">
            <div class="basic-container clearfix">
                <ul class="nav topbar-items pull-left">
                    <li class="nav-item">
                        <ul class="nav header-info">
                            <li>
                                <div class="header-address typo-white"><span class="ti-location-pin"></span>
                                    684 West College St. Sun City, USA</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav topbar-items pull-right">
                    <li class="nav-item">
                        <div class="social-icons typo-white">
                            <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                            <a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
                            <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                            <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                            <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
                            <a href="#" class="social-dribble"><span class="ti-dribbble"></span></a>
                        </div>
                    </li>
                    <li><a href="#" class="full-view-switch text-center"><i class="ti-search typo-white"></i></a>
                    </li>
                    <li>
                        <!--Search-->
                        <div class="full-view-wrapper hide">
                            <a href="#" class="close full-view-close"></a>
                            <form class="navbar-form search-form" role="search">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search hit enter.." name="srch-term"
                                        type="text">
                                </div>
                            </form>
                        </div>
                    </li>
                        @guest
                            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if (!auth()->guard('admin')->check())
                                <li class="nav-item"><a href="{{ route('user.dashboard') }}">My Account</a></li>
                                <li class="nav-item">
                                    <button class="btn btn-link p-0 m-0 align-baseline py-2 px-3 text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#logoutModal">
                                        Logout
                                    </button>
                                </li>
                            @endif
                        @endguest
                </ul>
            </div>
        </div>
        <!--Topbar-->
        <!--Sticky part-->
        <div class="sticky-outer">
            <div class="sticky-head">
                <!--Navbar-->
                <nav class="navbar nav-shadow">
                    <div class="basic-container clearfix">
                        <div class="navbar-inner">
                            <!--Overlay Menu Switch-->
                            <ul class="nav navbar-items pull-left">
                                <li class="list-item">
                                    <a href="/" class="logo-general"><img src="images/logo-light.png"
                                            class="img-fluid" width="166" height="50" alt="Logo" /></a>
                                    <a href="/" class="logo-sticky"><img src="images/logo-dark.png"
                                            class="img-fluid" width="166" height="50" alt="Logo" /></a>
                                </li>
                            </ul>
                            <!-- Menu -->
                            <ul class="nav navbar-items pull-right">
                                <!--List Item-->
                                <li class="list-item">
                                    <ul class="nav navbar-main menu-white">
                                        <li class="active cus-img-menu">
                                            <a href="/">Home</a>
                                        </li>
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                                        <li>
                                            <a href="{{ route('events.index') }}">Events</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sermons.index') }}">Sermons</a>
                                        </li>
                                        <li class="dropdown mega-dropdown dropdown-sub relative"><a
                                                href="{{ route('ministries.index') }}">Ministries</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-child-dropdown-menu"><a href="#"
                                                        class="text-uppercase theme-color">Ministry
                                                        Details</a>
                                                    <ul class="mega-child-dropdown-menu">
                                                        <li><a href="childrens-ministry.html">Childrens
                                                                Ministry</a></li>
                                                        <li><a href="family-ministry.html">Family
                                                                Ministry</a></li>
                                                        <li><a href="global-ministry.html">Global
                                                                Ministry</a></li>
                                                        <li><a href="music-ministry.html">Music Ministry</a>
                                                        </li>
                                                        <li><a href="prison-ministry.html">Prison
                                                                Ministry</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ route('contacts.index') }}">Contact Us</a></li>
                                    </ul>
                                </li>
                                <!--List Item End-->
                                <!--List Item-->
                                <li class="list-item">
                                    <div class="header-navbar-text-1"><a href="{{ route('donations.index') }}"
                                            class="h-donate-btn">Donate</a></div>
                                </li>
                                <!--List Item End-->
                            </ul>
                            <!-- Menu -->
                        </div>
                    </div>
                </nav>
            </div>
            <!--sticky-head-->
        </div>
        <!--sticky-outer-->
    </div>
    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to log out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('logout-form').submit();">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>

</header>
<form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
    @csrf
</form>
