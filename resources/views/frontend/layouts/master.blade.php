<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png" rel="icon">
	<!--Title-->
	<title>Theodiaspora - @yield('title')</title>
	<!-- CSS -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Owl Slider -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Revolution Slider -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/home-10/rs6.css">
	<!-- Main Style -->
	<link rel="stylesheet" href="css/color-schemes/red.css">
	<link rel="stylesheet" href="css/style.css" class="main-style">
	<style>
		#rev_slider_6_1_wrapper .tp-loader.spinner1 {
			background-color: #FFFFFF !important;
		}
	</style>
	<style>
		.rs-layer.Concept-Content a,
		.rs-layer.Concept-Content a:visited {
			color: #fff !important;
			border-bottom: 1px solid #fff !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content a:hover {
			border-bottom: 1px solid transparent !important
		}

		.rs-layer.Concept-Content-Dark a,
		.rs-layer.Concept-Content-Dark a:visited {
			color: #000 !important;
			border-bottom: 1px solid #000 !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content-Dark a:hover {
			border-bottom: 1px solid transparent !important
		}

		@media only screen and (max-width:575px) {
			rs-layer.res-slide-btn {
				padding: 7px 16px !important;
				font-size: 13px !important
			}
		}
	</style>
</head>
<!--Body Start-->

<body data-res-from="1025">
	<!--Page Loader-->
	<div class="page-loader"></div>
	<!--Zmm Wrapper-->
	<div class="zmm-wrapper">
		<a href="#" class="zmm-close close"></a>
		<div class="zmm-inner bg-white typo-dark">
			<div class="text-center mobile-logo-part margin-bottom-30">
				<a href="index.html" class="img-before"><img src="images/logo-dark.png" class="img-fluid" width="170"
						height="51" alt="Logo"></a>
			</div>
			<div class="zmm-main-nav">
			</div>
			<div class="search-form-wrapper margin-top-30">
				<form class="search-form" role="search">
					<div class="input-group add-on">
						<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i
									class="ti-arrow-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Overlay Search -->
	<div class="overlay-search text-center hide">
		<a href="#" class="close close-light overlay-search-close"></a>
		<div class="search-form-wrapper">
			<form class="navbar-form search-form sliding-search-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Main wrapper-->
	<div class="page-wrapper">
		<div class="page-wrapper-inner">
            @hasSection('header')
                @yield('header')
            @else
                @yield('frontend.layouts.header-default')
            @endif

			@yield('content')
		</div>
		<!-- .page-wrapper-inner -->
	</div>
	<!--page-wrapper-->

	<!-- Footer -->
	@include('frontend.layouts.footer')
	<!-- Footer -->
	<!-- jQuery Lib -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- Easing Js -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Carousel Js Code -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Paroller Js -->
	<script src="js/jquery.paroller.min.js"></script>
	<!-- Isotope Js -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- Magnific Popup Js -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Day Counter Js -->
	<script src="js/jquery.countdown.min.js"></script>
	<!-- Circle Progress Js -->
	<script src="js/jquery.circle.progress.min.js"></script>
	<!-- Validator Js -->
	<script src="js/validator.min.js"></script>
	<!-- Smart Resize Js -->
	<script src="js/smartresize.min.js"></script>
	<!-- Appear Js -->
	<script src="js/jquery.appear.min.js"></script>
	<!-- Theme Custom Js -->
	<script src="js/custom.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="rs-plugin/js/home-10/rbtools.min.js"></script>
	<script src="rs-plugin/js/home-10/rs6.min.js"></script>
	<script src="rs-plugin/js/home-10/home-10.js"></script>
	<!--<script src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<!-- REVOLUTION INTERNAL JS FILES
    <script src="rs-plugin/js/main-slider/main.slider.js"></script>
    <script src="rs-plugin/js/main-slider/home.slider-1.js"></script> -->
</body>
<!-- Body End -->

</html>
