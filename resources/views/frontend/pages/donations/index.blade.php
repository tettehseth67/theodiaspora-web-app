@extends('frontend.layouts.master')
@section('title', 'Donations')
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
                                <span class="current">Donate Now</span>
                            </div>
                            <h1 class="page-title mb-0">Donate Now</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- Sermon Section -->
            <section id="section-sermon" class="sermon-section pad-bottom-45">
                <div class="container">
                    <!-- Sermon Main Wrap -->
                    <div class="sermon-main-wrap sermon-list sermon-grid-2 ">
                        <!-- Row -->
                        <div class="row">
                            <!-- Col -->
                            <div class="col-lg-4 pe-5 px-sm-15">
                                <!-- Sidebar -->
                                <div class="sidebar left-sidebar">
                                    <!-- Campaign -->
                                    <div class="widget charitable-campaigns-widget mb-0">
                                        <ol class="campaigns ps-0 mb-0">
                                            <li class="campaign">
                                                <img class="img-fluid squared w-100 mb-3"
                                                    src="images/campaigns/campaign1.jpg" width="768" height="456"
                                                    alt="Adopt Child">
                                                <h6 class="campaign-title mb-1"><a href="campaigns-single.html">Adopt
                                                        Child</a></h6>
                                                <div class="campaign-time-left"><span
                                                        class="amount time-left days-left">392</span> Days Left</div>
                                            </li>
                                            <li class="campaign">
                                                <img class="img-fluid squared w-100 mb-3"
                                                    src="images/campaigns/campaign2.jpg" width="768" height="456"
                                                    alt="Medical Treatment">
                                                <h6 class="campaign-title mb-1"><a href="campaigns-single.html">Medical
                                                        Treatment</a></h6>
                                                <div class="campaign-time-left"><span
                                                        class="amount time-left days-left">167</span> Days Left</div>
                                            </li>
                                            <li class="campaign">
                                                <img class="img-fluid squared w-100 mb-3"
                                                    src="images/campaigns/campaign3.jpg" width="768" height="456"
                                                    alt="Donate Clothes">
                                                <h6 class="campaign-title mb-1"><a href="campaigns-single.html">Donate
                                                        Clothes</a></h6>
                                                <div class="campaign-time-left"><span
                                                        class="amount time-left days-left">153</span> Days Left</div>
                                            </li>
                                            <li class="campaign">
                                                <img class="img-fluid squared w-100 mb-3"
                                                    src="images/campaigns/campaign4.jpg" width="768" height="456"
                                                    alt="Shelters For Needy">
                                                <h6 class="campaign-title mb-1"><a href="campaigns-single.html">Shelters For
                                                        Needy</a></h6>
                                                <div class="campaign-time-left"><span
                                                        class="amount time-left days-left">119</span> Days Left</div>
                                            </li>
                                            <li class="campaign">
                                                <img class="img-fluid squared w-100 mb-3"
                                                    src="images/campaigns/campaign5.jpg" width="768" height="456"
                                                    alt="Hygienic Food">
                                                <h6 class="campaign-title mb-1"><a href="campaigns-single.html">Hygienic
                                                        Food</a></h6>
                                                <div class="campaign-time-left"><span
                                                        class="amount time-left days-left">100</span> Days Left</div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- Campaign -->
                                </div>
                                <!-- Sidebar -->
                            </div>
                            <!-- Col -->
                            <div class="col-lg-8">
                                <div class="title-wrap margin-bottom-25">
                                    <div class="section-title">
                                        <span class="sub-title theme-color text-uppercase">DONATE HERE!</span>
                                        <h2 class="section-title margin-top-5">Save the Humanity, Save Life</h2>
                                        <span class="border-bottom"></span>
                                    </div>
                                    <div class="pad-top-15">
                                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipisi cing
                                            elit dolo rem consequ untur natus laudantium commodie adipis.</p>
                                        <a href="{{ route('login') }}" class="margin-bottom-20">Registered before? Log in to use your
                                            saved details.</a>
                                    </div>
                                </div>
                                <!-- Contact Form -->
                                <div class="contact-form-4 pt-2">
                                    <!-- Form -->
                                    <div class="contact-form-wrap">
                                        <!-- form inputs -->
                                        @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif

                                        <form action="{{ route('donations.storePublic') }}" method="POST" id="donation-form">
                                            @csrf
                                            <!-- Donation Amount -->
                                            <div class="wpo-donations-amount">
                                                <h2>Your Donation</h2>
                                                <input type="number" class="form-control" name="amount" placeholder="Enter Donation Amount" required>
                                            </div>

                                            <!-- Donor Details -->
                                            <div class="wpo-donations-details">
                                                <h2>Details</h2>
                                                <div class="row">
                                                    <div class="col-lg-6 form-group">
                                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                                    </div>
                                                    <div class="col-lg-12 form-group">
                                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                                    </div>
                                                    <div class="col-12 form-group">
                                                        <textarea class="form-control" name="message" placeholder="Message (optional)"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Payment Method -->
                                            <div class="wpo-doanation-payment">
                                                <h2>Choose Your Payment Method</h2>
                                                <div class="wpo-payment-option">
                                                    <ul class="wpo-payment-select">
                                                        <li>
                                                            <input type="radio" id="pay_card" name="payment_method" value="card" required>
                                                            <label for="pay_card">Payment by Card</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="pay_offline" name="payment_method" value="offline">
                                                            <label for="pay_offline">Offline Donation</label>
                                                        </li>
                                                    </ul>

                                                    <!-- Card Types -->
                                                    <ul class="payment-name">
                                                        <li>
                                                            <input type="radio" id="visa" name="card_type" value="visa">
                                                            <label for="visa"><img src="visa.png" alt="Visa"></label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="mastercard" name="card_type" value="mastercard">
                                                            <label for="mastercard"><img src="mastercard.png" alt="Mastercard"></label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="amex" name="card_type" value="amex">
                                                            <label for="amex"><img src="amex.png" alt="Amex"></label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="paypal" name="card_type" value="paypal">
                                                            <label for="paypal"><img src="paypal.png" alt="PayPal"></label>
                                                        </li>
                                                    </ul>

                                                    <!-- Card Payment Details -->
                                                    <div class="contact-form form-style">
                                                        <div class="row">
                                                            <div class="col-lg-6 form-group">
                                                                <label for="cardholder_name">Cardholder Name</label>
                                                                <input type="text" id="cardholder_name" name="cardholder_name" class="form-control" placeholder="John Doe">
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <label for="card_number">Card Number</label>
                                                                <input type="text" id="card_number" name="card_number" class="form-control" placeholder="1234 5678 9012 3456">
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <label for="cvv">CVV</label>
                                                                <input type="text" id="cvv" name="cvv" class="form-control" placeholder="123">
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <label for="expiry_date">Expiry Date</label>
                                                                <input type="text" id="expiry_date" name="expiry_date" class="form-control" placeholder="MM/YY">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="submit-area">
                                                <button type="submit" class="theme-btn submit-btn btn btn-outline-primary">Donate Now</button>
                                            </div>
                                        </form>


                                        <!-- form inputs end -->
                                        <p id="contact-status-msg" class="hide"></p>
                                    </div>
                                    <!-- Form End-->
                                </div>
                                <!-- contact-form-1 -->
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

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('donation-form');
                const messageBox = document.getElementById('donation-message');

                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const data = new FormData(form);

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                            },
                            body: data
                        })
                        .then(res => res.json())
                        .then(data => {
                            messageBox.className = 'alert alert-success mt-3';
                            messageBox.textContent = data.message || 'Donation submitted successfully!';
                            messageBox.classList.remove('d-none');
                            form.reset();

                            setTimeout(() => {
                                messageBox.classList.add('fade');
                                messageBox.style.opacity = 0;
                                setTimeout(() => {
                                    messageBox.classList.add('d-none');
                                    messageBox.classList.remove('alert', 'alert-success',
                                        'fade');
                                    messageBox.style.opacity = 1;
                                    messageBox.textContent = '';
                                }, 1000);
                            }, 5000);
                        })
                        .catch(() => {
                            messageBox.className = 'alert alert-danger mt-3';
                            messageBox.textContent = 'Something went wrong. Please try again.';
                            messageBox.classList.remove('d-none');
                        });
                });
            });
        </script>
        <script>
            function validateForm() {
                const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/i;
                const expiryPattern = /^(0[1-9]|1[0-2])\/\d{2}$/;

                const firstName = document.getElementById("first_name").value.trim();
                const lastName = document.getElementById("last_name").value.trim();
                const email = document.getElementById("email").value.trim();
                const amount = document.getElementById("donation_amount").value.trim();
                const method = document.querySelector('input[name="payment_method"]:checked');

                if (!firstName || !lastName || !email || !amount || !method) {
                    alert("Please fill in all required fields.");
                    return false;
                }

                if (!emailPattern.test(email)) {
                    alert("Please enter a valid email address.");
                    return false;
                }

                if (method.value === "card") {
                    const cardholder = document.getElementById("cardholder_name").value.trim();
                    const cardNumber = document.getElementById("card_number").value.trim();
                    const cvv = document.getElementById("cvv").value.trim();
                    const expiry = document.getElementById("expiry_date").value.trim();

                    if (!cardholder || !cardNumber || !cvv || !expiry) {
                        alert("Please fill in all card details.");
                        return false;
                    }

                    if (cardNumber.length < 13 || cardNumber.length > 19 || isNaN(cardNumber)) {
                        alert("Please enter a valid card number.");
                        return false;
                    }

                    if (!/^\d{3,4}$/.test(cvv)) {
                        alert("CVV must be 3 or 4 digits.");
                        return false;
                    }

                    if (!expiryPattern.test(expiry)) {
                        alert("Expiry must be in MM/YY format.");
                        return false;
                    }
                }

                return true;
            }
            </script>
    @endpush

@endsection
