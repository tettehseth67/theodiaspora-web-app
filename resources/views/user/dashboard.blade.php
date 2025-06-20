@extends('user.layouts.master')
@section('title', 'User Dashboard')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-5 fw-bold">Welcome, {{ Auth::user()->name }}!</h1>
            <p class="text-muted">This is your personalized dashboard.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="bi bi-person-lines-fill display-4 text-primary"></i>
                    <h5 class="card-title mt-3">Profile</h5>
                    <p class="card-text">View and update your profile information.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Edit Profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-event-fill display-4 text-success"></i>
                    <h5 class="card-title mt-3">Upcoming Events</h5>
                    <p class="card-text">See what's coming up in the community.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">View Events</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body text-center">
                    <i class="bi bi-chat-dots-fill display-4 text-warning"></i>
                    <h5 class="card-title mt-3">Messages</h5>
                    <p class="card-text">Check your latest communications.</p>
                    <a href="#" class="btn btn-outline-warning btn-sm">Go to Inbox</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
