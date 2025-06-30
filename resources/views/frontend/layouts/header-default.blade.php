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
    <div class="header-inner header-1">
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
                                    <a href="/" class="logo-general"><img src="images/logo-dark.png"
                                            class="img-fluid" width="166" height="50" alt="Logo" /></a>
                                    <a href="/" class="logo-sticky"><img src="images/logo-dark.png"
                                            class="img-fluid" width="166" height="50" alt="Logo" /></a>
                                </li>
                            </ul>
                            <!-- Menu -->
                            <ul class="nav navbar-items pull-right">
                                <!--List Item-->
                                <li class="list-item">
                                    <ul class="nav navbar-main menu-dark">
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
</header>
