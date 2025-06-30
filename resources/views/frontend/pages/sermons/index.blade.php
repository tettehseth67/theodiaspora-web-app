@extends('frontend.layouts.master')
@section('title', 'Sermons')
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
                                <span class="current">Sermons</span>
                            </div>
                            <h1 class="page-title mb-0">Sermons</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Sermon Section -->
            <section id="section-sermon" class="sermon-section">
                <div class="container">
                    <!-- Sermon Main Wrap -->
                    <div class="sermon-main-wrap sermon-list sermon-grid-2">
                        <!-- Row -->
                        <div class="row">
                            <!-- Col -->
                            <div class="col-lg-4 pe-5 px-sm-15">
                                <!-- Sidebar -->
                                <div class="sidebar left-sidebar">
                                    <!-- Search -->
                                    <div class="widget search-widget">
                                        <div class="search-form-wrapper">
                                            <form class="search-form" role="search">
                                                <div class="input-group add-on">
                                                    <input class="form-control" placeholder="Search for.." name="srch-term"
                                                        type="text">
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
                                                                    class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
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
                                                                    class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
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
                                                                    class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
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
                                                                    class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
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
                            <div class="col-lg-8">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Col -->
                                    @if ($sermons->isEmpty())
                                        <p>No sermons available right now.</p>
                                    @else
                                        <div class="row">
                                            @foreach ($sermons as $sermon)
                                                <div class="col-md-12">
                                                    <!--Sermon Inner-->
                                                    <div class="media sermon-inner margin-bottom-40 pad-tb-none relative">
                                                        <!--Sermon Thumb-->
                                                        <div class="sermon-thumb">
                                                            <img src="{{ $sermon->thumbnail ? asset('storage/' . $sermon->thumbnail) : asset('images/sermons/list/sermon1.jpg') }}"
                                                                class="img-fluid" alt="{{ $sermon->title }}" />
                                                        </div>

                                                        <div class="media-body pad-tb-20">
                                                            <div class="sermon-details">
                                                                <div class="sermon-play-list">
                                                                    <ul>
                                                                        @if ($sermon->video_url)
                                                                            <li>
                                                                                <a href="{{ asset('storage/' . $sermon->video_url) }}"
                                                                                    class="popup-video"
                                                                                    title="Watch Video" download><i
                                                                                        class="ti-control-play"></i></a>
                                                                            </li>
                                                                        @endif

                                                                        @if ($sermon->audio_url)
                                                                            <li>
                                                                                <a href="{{ asset('storage/' . $sermon->audio_url) }}"
                                                                                    class="popup-audio"
                                                                                    title="Listen Audio" download><i
                                                                                        class="ti-music"></i></a>
                                                                            </li>
                                                                        @endif

                                                                        @if ($sermon->pdf_url)
                                                                            <li>
                                                                                <a href="{{ asset('storage/' . $sermon->pdf_url) }}"
                                                                                    class="sermon-pdf"
                                                                                    title="Download Notes"
                                                                                    target="_blank"><i
                                                                                        class="ti-book"></i></a>
                                                                            </li>
                                                                        @endif
                                                                    </ul>
                                                                </div>

                                                                <div class="sermon-title">
                                                                    <h4 class="margin-bottom-10">
                                                                        <a href="{{ route('sermons.show', $sermon) }}"
                                                                            class="sermon-name">{{ $sermon->title }}</a>
                                                                    </h4>
                                                                </div>

                                                                <div class="sermon-info mt-2 pb-1">
                                                                    <ul>
                                                                        <li>
                                                                            <span class="title">Sermon By:</span>
                                                                            {{ $sermon->speaker ?? 'Staff' }}
                                                                        </li>
                                                                        <li>
                                                                            <span class="title">Categories:</span>
                                                                            @foreach ($sermon->categories as $category)
                                                                                <a
                                                                                    href="{{ route('sermons.index', ['category' => $category->slug]) }}">
                                                                                    {{ $category->name }}
                                                                                </a>
                                                                                @if (!$loop->last)
                                                                                    ,
                                                                                @endif
                                                                            @endforeach
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="ti-time me-2"></i>
                                                                                {{ optional($sermon->date)->format('M j, Y') }}
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="post-meta bottom-meta margin-top-20">
                                                                <div class="sermon-link">
                                                                    <a target="_blank"
                                                                        href="{{ route('sermons.show', $sermon) }}"
                                                                        class="link theme-color">Read More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Sermon Inner Ends-->
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="d-flex justify-content-center mt-5">
                                            {{ $sermons->links() }}
                                        </div>
                                    @endif
                                </div>
                                <!-- row -->
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
