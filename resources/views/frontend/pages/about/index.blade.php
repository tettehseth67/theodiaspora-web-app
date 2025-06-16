@extends('frontend.layouts.master')
@section('title', 'About Us')
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
                                <span class="current">About Us</span>
                            </div>
                            <h1 class="page-title mb-0">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
