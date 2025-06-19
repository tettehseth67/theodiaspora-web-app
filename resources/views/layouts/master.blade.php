<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon">
    <title>Theodiaspora - @yield('title')</title>
    <meta name="description" content="Login and Register Form Html Template">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
========================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
        type="text/css">

    <!-- Stylesheet
========================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/css/stylesheet.css') }}">
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>

<body>

    @yield('content')

    <!-- Script -->
    <script src="{{ asset('admin_asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Style Switcher -->
    <script src="{{ asset('admin_asset/js/switcher.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/theme.js') }}"></script>

</body>

</html>
