@extends('frontend.layouts.master')
@section('title', 'Ministries')
@section('header')
    @include('frontend.layouts.header-default')
@endsection
@section('content')
    <div class="page-title-wrap typo-white">
        <div class="page-title-wrap-inner section-bg-img" data-bg="images/page-title.jpg">
            <span class="theme-overlay"></span>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="page-title-inner">
                            <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                <a href="{{ route('home') }}" class="theme-color">Home</a>
                                <span class="current">Ministries</span>
                            </div>
                            <h1 class="page-title mb-0">Ministries</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <!-- Page Content -->
    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Sermon Section -->
            <section id="ministries-section" class="ministries-section pad-bottom-70">
                <div class="container">
                    <!-- Sermon Main Wrap -->
                    <div class="ministries-main-wrap ministries-grid">
                        <!-- Row -->
                        <div class="row">
                            <!-- Col -->
                            <div class="col-lg-8">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/childrens_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/cross-family.png"
                                                        class="img-fluid ministries-icon-img" width="80" height="80"
                                                        alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Children's Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>Children's ministry is the most important ministry in our church.
                                                            This ministry helps kids learn about the Lord Jesus</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html" class="link">Read
                                                            More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/women_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/angle.png"
                                                        class="img-fluid ministries-icon-img" width="80" height="80"
                                                        alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Womens Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>A Women’s ministry includes hosting Bible studies, services,
                                                            support group, and gathering events. The goal of this women’s
                                                            ministry</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html" class="link">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/global_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/loveus.png"
                                                        class="img-fluid ministries-icon-img" width="80" height="80"
                                                        alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Global Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>We are very grateful for our part in the work of Global
                                                            Ministries and the opportunity to be on</p>
                                                    </div>
                                                    <div class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html"
                                                            class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/music_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/bible.png"
                                                        class="img-fluid ministries-icon-img" width="80"
                                                        height="80" alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Music Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>Music is something we get exposed to from childhood through
                                                            adulthood. From the pattering sounds from raindrops, whistle of
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html"
                                                            class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/family_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/family.png"
                                                        class="img-fluid ministries-icon-img" width="80"
                                                        height="80" alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Family Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>Our Family ministry often takes the shape of family-targeted
                                                            dealing with various life issues and counseling services for
                                                            families</p>
                                                    </div>
                                                    <div
                                                        class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html"
                                                            class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <!-- Col -->
                                    <div class="col-md-6">
                                        <div class="ministries-box-style-2">
                                            <!-- Ministries Inner -->
                                            <div class="ministries-inner">
                                                <div class="ministries-thumb">
                                                    <img class="img-fluid squared w-100"
                                                        src="images/ministries/prison_ministry.jpg" width="360"
                                                        height="240" alt="Agricultural Processing">
                                                </div>
                                                <div class="ministries-icon-img-wrap">
                                                    <img decoding="async" src="images/ministries/dove.png"
                                                        class="img-fluid ministries-icon-img" width="80"
                                                        height="80" alt="Children’s Ministry">
                                                </div>
                                                <!-- Ministries Content -->
                                                <div class="ministries-content pad-lr-30 pad-top-20">
                                                    <div class="ministries-title margin-bottom-15">
                                                        <h4 class="text-center"><a href="ministries-single.html"
                                                                class="ministries-link">Prison Ministry</a></h4>
                                                    </div>
                                                    <div class="ministries-desc text-center">
                                                        <p>Our Prison ministry serves in jails and prisons. Services start
                                                            in the early noon. Prison ministry teaches spiritual lessons,
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="ministries-link margin-top-15 margin-bottom-30 text-center">
                                                        <a target="_blank" href="ministries-single.html"
                                                            class="link">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ministries Inner Ends -->
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- Col -->
                            <div class="col-lg-4 ps-5 px-sm-15">
                                <!-- Sidebar -->
                                <div class="sidebar right-sidebar">
                                    <!-- Search -->
                                    <div class="widget search-widget">
                                        <div class="search-form-wrapper">
                                            <form class="search-form" role="search">
                                                <div class="input-group add-on">
                                                    <input class="form-control" placeholder="Search for.."
                                                        name="srch-term" type="text">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default search-btn" type="submit"><i
                                                                class="ti-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Search -->
                                    <!-- Categories -->
                                    <div class="widget category-widget">
                                        <div class="widget-title">
                                            <!-- Title -->
                                            <h3 class="title">Categories</h3>
                                        </div>
                                        <ul class="category-list">
                                            <li class="cat-item">
                                                <a href="#">Chartiy</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Faithful</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Jesus Love</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Prayer</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Sermon</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Categories -->
                                    <!-- Popular Post -->
                                    <div class="widget recent-posts">
                                        <div class="widget-title">
                                            <!-- Title -->
                                            <h3 class="title">Popular Posts</h3>
                                        </div>
                                        <ul class="list-post-content">
                                            <li>
                                                <!--Media-->
                                                <div class="media list-post">
                                                    <div class="side-noimg themebg-color">
                                                        <span class="fa fa-quote-left"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="sermon-single.html">Testimony Love Offering So Blessed</a>
                                                        <div class="meta-items mt-2">
                                                            <span class="post-date"><i
                                                                    class="ti-time me-2 theme-color"></i>Apr 18,
                                                                2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Media End -->
                                            </li>
                                            <li>
                                                <!--Media-->
                                                <div class="media list-post">
                                                    <div class="side-noimg themebg-color">
                                                        <span class="fa fa-anchor"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="sermon-single.html">Belongs to those who fail in their
                                                            duty</a>
                                                        <div class="meta-items mt-2">
                                                            <span class="post-date"><i
                                                                    class="ti-time me-2 theme-color"></i>Apr 18,
                                                                2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Media End -->
                                            </li>
                                            <li>
                                                <!--Media-->
                                                <div class="media list-post">
                                                    <span class="popular-thumb me-3">
                                                        <img width="70" height="70" class="rounded"
                                                            src="images/blog/thumb/blog_thumb3-80x80.jpg" alt="">
                                                    </span>
                                                    <div class="media-body">
                                                        <a href="sermon-single.html">An Important Conversation Around</a>
                                                        <div class="meta-items mt-2">
                                                            <span class="post-date"><i
                                                                    class="ti-time me-2 theme-color"></i>Apr 18,
                                                                2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Media End -->
                                            </li>
                                            <li>
                                                <!--Media-->
                                                <div class="media list-post">
                                                    <span class="popular-thumb me-3">
                                                        <img width="70" height="70" class="rounded"
                                                            src="images/blog/thumb/blog_thumb1-80x80.jpg" alt="">
                                                    </span>
                                                    <div class="media-body">
                                                        <a href="sermon-single.html">Let’s Talk With Brian Houston</a>
                                                        <div class="meta-items mt-2">
                                                            <span class="post-date"><i
                                                                    class="ti-time me-2 theme-color"></i>Apr 18,
                                                                2019</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Media End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Popular Post -->
                                    <!-- Tag Cloud -->
                                    <div class="widget tag-cloud mb-0">
                                        <div class="widget-title">
                                            <!-- Title -->
                                            <h3 class="title">Tags</h3>
                                        </div>
                                        <div class="tagcloud">
                                            <a href="#" class="tag-cloud-link">biblestory</a>
                                            <a href="#" class="tag-cloud-link">church</a>
                                            <a href="#" class="tag-cloud-link">donate</a>
                                            <a href="#" class="tag-cloud-link">hope</a>
                                            <a href="#" class="tag-cloud-link">jesus</a>
                                            <a href="#" class="tag-cloud-link">prayer</a>
                                            <a href="#" class="tag-cloud-link">sermon</a>
                                        </div>
                                    </div>
                                    <!-- Tag Cloud -->
                                </div>
                                <!-- Sidebar -->
                            </div>
                            <!-- Col -->
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- Sermon Main Wrap -->
                </div>
                <!-- Container -->
            </section>
            <!-- Sermon Section End -->
        </div>
    </div>
@endsection
