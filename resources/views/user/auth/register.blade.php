@extends('layouts.master')
@section('title', 'Register')
@section('content')
<div id="main-wrapper" class="oxyy-login-register">
    <div class="container-fluid px-0">
        <div class="row g-0 min-vh-100">
            <!-- Register Form ========================= -->
            <div class="col-md-6 d-flex flex-column align-items-center order-2 order-md-1">
                <div class="container pt-5">
                    <div class="row gx-0">
                        <div class="col-11 col-md-10 mx-auto">
                            <p class="text-end text-2 text-muted fw-300">Already a member? <a class="fw-300"
                                    href="{{ route('login') }}">Sign in now</a></p>
                        </div>
                    </div>
                </div>
                <div class="container my-auto py-5">
                    <div class="row gx-0">
                        <div class="col-11 col-md-10 col-lg-9 col-xl-8 mx-auto">
                            <h3 class="fw-300 text-9 mb-5">Sign up</h3>
                            <form id="registerForm" method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="fullName" class="form-label fw-300">Full Name</label>
                                    <input type="text" class="form-control bg-light border-light" id="fullName"
                                        required="" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="emailAddress" class="form-label fw-300">Email Address</label>
                                    <input type="email" class="form-control bg-light border-light" id="emailAddress"
                                        required="" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label fw-300">Password</label>
                                    <input type="password" class="form-control bg-light border-light"
                                        id="loginPassword" required="" name="password" placeholder="Enter Password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label fw-300">Confirm Password</label>
                                    <input type="password" class="form-control bg-light border-light"
                                        id="confirmPassword" name="password_confirmation" required="" placeholder="Confirm Password">
                                </div>
                                <div class="form-check my-4">
                                    <input id="agree" name="agree" class="form-check-input" type="checkbox">
                                    <label class="form-check-label text-2 fw-300" for="agree">I agree to the <a
                                            href="#">Terms</a> and <a href="#">Privacy Policy</a>.</label>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-dark shadow-none fw-400" type="submit">Sign Up</button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center my-4">
                                <hr class="flex-grow-1">
                                <span class="mx-2 text-2 text-muted fw-300">Or continue with</span>
                                <hr class="flex-grow-1">
                            </div>
                            <div class="row gx-3">
                                <div class="col-6 d-grid">
                                    <button type="button"
                                        class="btn btn-light btn-sm fw-400 shadow-none border"><span class="me-2"><i
                                                class="fab fa-google"></i></span>Google</button>
                                </div>
                                <div class="col-6 d-grid">
                                    <button type="button"
                                        class="btn btn-light btn-sm fw-400 shadow-none border"><span class="me-2"><i
                                                class="fab fa-facebook-f"></i></span>Facebook</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Register Form End -->

            <!-- Welcome Text
  ========================= -->
            <div class="col-md-6 bg-light  order-1 order-md-2">
                <div class="container h-100 d-flex flex-column">
                    <div class="row g-0">
                        <div class="col-11 col-md-10 mx-auto">
                            <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="{{ route('home') }}"
                                    title="Oxyy"><img src="images/logo.png" alt="Oxyy"></a> </div>
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

