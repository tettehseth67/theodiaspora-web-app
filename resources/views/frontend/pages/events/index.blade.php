@extends('frontend.layouts.master')
@section('title', 'Events')
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
                                <span class="current">Events</span>
                            </div>
                            <h1 class="page-title mb-0">Events</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="events-listing">
                        @foreach ($events as $event)
                            <div class="event-item">
                                <div class="event-date">
                                    <span class="day">{{ $event->date->format('d') }}</span>
                                    <span class="month">{{ $event->date->format('M') }}</span>
                                </div>
                                <div class="event-details">
                                    <h3 class="event-title">{{ $event->title }}</h3>
                                    <p class="event-description">{{ $event->description }}</p>
                                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Events Section -->
            <section id="events-section" class="events-section pad-top-120 pad-bottom-70">
                <!-- Screan Reader Text -->
                <h2 class="screen-reader-text">Events</h2>
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <!--events Main wrap-->
                            <div class="events-main-wrapper events-grid events-style-2">
                                <div class="row">

                                    @if ($events->isEmpty())
                                        <p>No upcoming events at the moment. Please check back soon.</p>
                                    @else
                                        <div class="row gx-4 gy-5">
                                            @foreach ($events as $event)
                                                <div class="col-lg-4 col-md-6">
                                                    <!--events Inner-->
                                                    <div class="events-inner margin-bottom-30">
                                                        <!--events Thumb-->
                                                        <div class="events-thumb mb-0 relative">
                                                            <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('images/events/grid1/event-1.jpg') }}"
                                                                class="img-fluid thumb w-100" alt="{{ $event->title }}" />
                                                        </div>
                                                        <!--events details-->
                                                        <div class="events-details pad-lr-30 pad-bottom-35">
                                                            <div class="event-date margin-bottom-30">
                                                                {{ $event->date->format('M j') }}
                                                                <span class="event-time">{{ $event->time }}</span>
                                                            </div>
                                                            <div class="event-title mb-3">
                                                                <h5>
                                                                    <a href="{{ route('events.show', $event) }}">
                                                                        Event: Reflect The Community And Serving
                                                                        {{ $event->title }}
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div class="read-more">
                                                                <a href="{{ route('events.show', $event) }}">Event
                                                                    Details</a>
                                                            </div>
                                                        </div>
                                                        <!--events details-->
                                                    </div>
                                                    <!--events Inner Ends-->
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="d-flex justify-content-center mt-5">
                                            {{ $events->links() }}
                                        </div>
                                    @endif

                                    <!-- Col-md -->
                                    <div class="col-lg-4 col-md-6">
                                        <!--events Inner-->
                                        <div class="events-inner margin-bottom-30">
                                            <!--events Thumb-->
                                            <div class="events-thumb mb-0 relative">
                                                <img src="images/events/grid1/event-2.jpg" class="img-fluid thumb w-100"
                                                    width="768" height="650" alt="events-img" />
                                            </div>
                                            <!--events details-->
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">Mar 3<span class="event-time">7.00
                                                        am</span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="event-details.html">Event: Reflect The Community And
                                                            Serving</a></h5>
                                                </div>
                                                <div class="read-more">
                                                    <a href="event-details.html">Event Details</a>
                                                </div>
                                            </div>
                                            <!--events details-->
                                        </div>
                                        <!--events Inner Ends-->
                                    </div>
                                    <!--Col-md Ends-->

                                    <!-- Col-md -->
                                    <div class="col-lg-4 col-md-6">
                                        <!--events Inner-->
                                        <div class="events-inner margin-bottom-30">
                                            <!--events Thumb-->
                                            <div class="events-thumb mb-0 relative">
                                                <img src="images/events/grid1/event-3.jpg" class="img-fluid thumb w-100"
                                                    width="768" height="650" alt="events-img" />
                                            </div>
                                            <!--events details-->
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">Apr 10<span class="event-time">6.00
                                                        am</span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="event-details.html">New Families During National Adoption
                                                            Month</a></h5>
                                                </div>
                                                <div class="read-more">
                                                    <a href="event-details.html">Event Details</a>
                                                </div>
                                            </div>
                                            <!--events details-->
                                        </div>
                                        <!--events Inner Ends-->
                                    </div>
                                    <!--Col-md Ends-->

                                    <!-- Col-md -->
                                    <div class="col-lg-4 col-md-6">
                                        <!--events Inner-->
                                        <div class="events-inner margin-bottom-30">
                                            <!--events Thumb-->
                                            <div class="events-thumb mb-0 relative">
                                                <img src="images/events/grid1/event-4.jpg" class="img-fluid thumb w-100"
                                                    width="768" height="650" alt="events-img" />
                                            </div>
                                            <!--events details-->
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">Mar 4<span class="event-time">12.00
                                                        pm</span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="event-details.html">Event: Lord is Sufficient for all of
                                                            our needs</a></h5>
                                                </div>
                                                <div class="read-more">
                                                    <a href="event-details.html">Event Details</a>
                                                </div>
                                            </div>
                                            <!--events details-->
                                        </div>
                                        <!--events Inner Ends-->
                                    </div>
                                    <!--Col-md Ends-->

                                    <!-- Col-md -->
                                    <div class="col-lg-4 col-md-6">
                                        <!--events Inner-->
                                        <div class="events-inner margin-bottom-30">
                                            <!--events Thumb-->
                                            <div class="events-thumb mb-0 relative">
                                                <img src="images/events/grid1/event-5.jpg" class="img-fluid thumb w-100"
                                                    width="768" height="650" alt="events-img" />
                                            </div>
                                            <!--events details-->
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">Apr 8<span class="event-time">5.00
                                                        pm</span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="event-details.html">Event: Building Holy & Healthy Lives
                                                            God’s</a></h5>
                                                </div>
                                                <div class="read-more">
                                                    <a href="event-details.html">Event Details</a>
                                                </div>
                                            </div>
                                            <!--events details-->
                                        </div>
                                        <!--events Inner Ends-->
                                    </div>
                                    <!--Col-md Ends-->

                                    <!-- Col-md -->
                                    <div class="col-lg-4 col-md-6">
                                        <!--events Inner-->
                                        <div class="events-inner margin-bottom-30">
                                            <!--events Thumb-->
                                            <div class="events-thumb mb-0 relative">
                                                <img src="images/events/grid1/event-6.jpg" class="img-fluid thumb w-100"
                                                    width="768" height="650" alt="events-img" />
                                            </div>
                                            <!--events details-->
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">Dec 18<span
                                                        class="event-time">11.00 am</span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="event-details.html">Event: Sharing Our Faith & Love To
                                                            Children</a></h5>
                                                </div>
                                                <div class="read-more">
                                                    <a href="event-details.html">Event Details</a>
                                                </div>
                                            </div>
                                            <!--events details-->
                                        </div>
                                        <!--events Inner Ends-->
                                    </div>
                                    <!--Col-md Ends-->

                                </div>
                                <!-- events Row -->
                            </div>
                            <!-- events Main wrap Ends -->
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                </div>
            </section>
            <!-- events Section Ends -->
        </div>
    </div>
@endsection
