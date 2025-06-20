<!DOCTYPE html>
<html lang="en" class=" layout-menu-fixed layout-compact " data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>Theodiaspora - @yield('title')</title>



    <!-- Canonical SEO -->

    <meta name="description"
        content="Sneat Free is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease.">
    <meta name="keywords"
        content="Sneat free dashboard, Sneat free bootstrap dashboard, free admin, free theme, open source, free, MIT license">
    <meta property="og:title" content="Sneat Bootstrap Dashboard FREE by ThemeSelection">
    <meta property="og:type" content="product">
    <meta property="og:url" content="https://themeselection.com/item/sneat-dashboard-free-bootstrap/">
    <meta property="og:image" content="images/sneat-hrml-free-smm-banner.png">
    <meta property="og:description"
        content="Sneat Free is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease.">
    <meta property="og:site_name" content="ThemeSelection">
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-free-bootstrap/">



    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/admin_asset/images/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/admin_asset/css/iconify-icons.css">

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="/admin_asset/css/core.css">
    <link rel="stylesheet" href="/admin_asset/css/demo.css">


    <!-- Vendors CSS -->

    <link rel="stylesheet" href="/admin_asset/css/perfect-scrollbar.css">

    <!-- endbuild -->

    <link rel="stylesheet" href="/admin_asset/css/apex-charts.css">

    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="/admin_asset/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="/admin_asset/js/config.js"></script>

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @include('admin.layouts.sidebar')


            <!-- Layout container -->
            <div class="layout-page">
                @include('admin.layouts.header')

                @yield('content')
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


    </div>

    <!-- Core JS -->
    <script src="/admin_asset/js/jquery.js"></script>

    <script src="/admin_asset/js/popper.js"></script>
    <script src="/admin_asset/js/bootstrap.js"></script>




    <script src="/admin_asset/js/perfect-scrollbar.js"></script>

    <script src="/admin_asset/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/admin_asset/js/apexcharts.js"></script>

    <!-- Main JS -->

    <script src="/admin_asset/js/main.js"></script>


    <!-- Page JS -->
    <script src="/admin_asset/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async="" defer="" src="/admin_asset/js/buttons.js"></script>






</body>

</html><!-- beautify ignore:end -->
