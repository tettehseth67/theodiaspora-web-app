@extends('frontend.layouts.master')
@section('title', 'Contact Us')
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
                                <a href="/" class="theme-color">Home</a>
                                <span class="current">Contact Us</span>
                            </div>
                            <h1 class="page-title mb-0">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Contact Section -->
            <section id="contact-section" class="contact-section pad-bottom-none">
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg1.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Our Location</h5>
                                        </div>
                                        <p class="mb-0">684 West College St. Sun City, United States America.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg2.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Phone Number</h5>
                                        </div>
                                        <a href="tel:(+55)654-545-5418">(+55) 654 - 545 - 5418</a>
                                        <br>
                                        <a href="tel:(+55)654-545-1235">(+55) 654 - 545 - 1235</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-4">
                            <div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg3.jpg">
                                <div class="f-box c-page text-center typo-white">
                                    <div class="feature-icon margin-bottom-10">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="feature-content">
                                        <div class="feature-title">
                                            <h5 class="mb-2">Email Address</h5>
                                        </div>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                        <br>
                                        <a href="mailto:info@zegen.com">info@zegen.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
            </section>

            <section class="contact-form-section form-with-img">
                <div class="container">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-8 pe-0">
                            <!-- Contact Form -->
                            <div class="contact-form-4 bg-white">
                                <!-- Form -->
                                <div class="contact-form-wrap">
                                    <!-- form inputs -->
                                    <form id="contact-form" class="contact-form" action="{{ route('contact.submit') }}"
                                        method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input id="name" class="form-control" name="name"
                                                        placeholder="Name" data-bv-field="name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input id="email" class="form-control" name="email"
                                                        placeholder="Email" data-bv-field="email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input id="phone" class="form-control" name="phone"
                                                        placeholder="Phone" data-bv-field="phone" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-message">
                                                    <!-- form group -->
                                                    <div class="form-group">
                                                        <textarea id="message" class="form-control textarea" rows="5" name="message" placeholder="Your Message"
                                                            data-bv-field="message"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-default mt-0 theme-btn"
                                                    onclick="this.disabled=true; this.innerText='Sending…'; this.form.submit();">
                                                    Send Now
                                                </button>

                                            </div>
                                        </div>
                                        <span class="clearfix"></span>
                                    </form>
                                    <!-- form inputs end -->
                                    <p id="contact-status-msg" class="hide"></p>
                                </div>
                                <!-- Form End-->
                            </div>
                            <!-- contact-form-1 -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-4 pad-none">
                            <div class="contact-img">
                                <img class="img-fluid" src="images/contact/contact_bg4.jpg" width="752"
                                    height="888" alt="Contact Map">
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                </div>
            </section>
            <!-- Contact Form Section End -->

        </div>
    </div>
@endsection
