@extends('layouts.master')
@section('title', 'Login')
@section('content')
    <div id="main-wrapper" class="oxyy-login-register">
        <div class="container-fluid px-0">
            <div class="row g-0 min-vh-100">
                <!-- Login Form ========================= -->
                <div class="col-md-6 d-flex flex-column align-items-center order-2 order-md-1">
                    <div class="container pt-5">
                        <div class="row gx-0">
                            <div class="col-11 col-md-10 mx-auto">
                                <p class="text-end text-2 text-muted fw-300">Not a member? <a class="fw-300"
                                        href="{{ route('admin.register') }}">Sign up now</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="container my-auto py-5">
                        <div class="row gx-0">
                            <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
                                <h3 class="fw-300 text-9 mb-5">Sign in</h3>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form id="loginForm" method="POST" action="{{ route('admin.login') }}">
                                    @csrf

                                    <div class="mb-2">
                                        <label for="emailAddress" class="form-label fw-300">Email Address</label>
                                        <input type="email" class="form-control bg-light border-light" id="emailAddress"
                                            name="email" required placeholder="Enter Your Email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="loginPassword" class="form-label fw-300">Password</label>
                                        <input type="password" class="form-control bg-light border-light" id="loginPassword"
                                            name="password" required placeholder="Enter Password">
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-check">
                                                <input id="remember-me" name="remember" class="form-check-input"
                                                    type="checkbox">
                                                <label class="form-check-label text-2 fw-300" for="remember-me">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col text-end">
                                            <a class="text-2 fw-300" href="">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="d-grid my-4">
                                        <button class="btn btn-dark shadow-none fw-400" type="submit">Sign in</button>
                                    </div>
                                </form>

                                <div class="d-flex align-items-center my-4">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2 text-2 text-muted fw-300">Or continue with</span>
                                    <hr class="flex-grow-1">
                                </div>
                                <div class="row gx-3">
                                    <div class="col-6 d-grid">
                                        <button type="button" class="btn btn-light btn-sm fw-400 shadow-none border"><span
                                                class="me-2"><i class="fab fa-google"></i></span>Google</button>
                                    </div>
                                    <div class="col-6 d-grid">
                                        <button type="button" class="btn btn-light btn-sm fw-400 shadow-none border"><span
                                                class="me-2"><i class="fab fa-facebook-f"></i></span>Facebook</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Login Form End -->

                <!-- Welcome Text
          ========================= -->
                <div class="col-md-6 bg-light  order-1 order-md-2">
                    <div class="container h-100 d-flex flex-column">
                        <div class="row g-0">
                            <div class="col-11 col-md-10 mx-auto">
                                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index.html" title="Oxyy"><img
                                            src="images/logo.png" alt="Oxyy"></a> </div>
                            </div>
                        </div>
                        <div class="row g-0 my-auto">
                            <div class="col-11 col-md-10 mx-auto">
                                <h1 class="text-13 fw-300 mb-4">Join the largest Designer community in the world.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Text End -->
            </div>
        </div>
    </div>
@endsection
