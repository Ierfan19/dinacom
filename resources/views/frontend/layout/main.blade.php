<!DOCTYPE html>
<html>

<!-- Mirrored from htmlbeans.com/html/dot/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:38:11 GMT -->

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desoku</title>
    <!-- include the site stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CPoppins:400,300,500,600,700'
        rel='stylesheet' type='text/css'>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/font-awesome.min.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/slick.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/responsive.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/colors.css">
</head>

<body>
    <div class="loader-holder">
        <div class="loader">
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
        </div>
    </div>
    <!-- main container of all the page elements -->
    <div id="wrapper">
        <!-- header of the page -->
        @include('frontend.layout.menu')
        <!-- header of the page end -->
        <!-- main of the page -->
        @yield('content')
        <!-- main of the page end -->
        <!-- aside of the page -->
        <!-- aside of the page end -->
        <!-- footer of the page -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>&copy; 2023 Copyright 2023, <a href="home.html">Desoku</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer of the page end -->
        <!-- Back Top of the page -->
        <span id="back-top" class="fa fa-angle-up"></span>
        <!-- Style Changer of the page -->
        <div id="style-changer" data-src="inc/style-changer.html"></div>
    </div>
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/jquery.js"></script>
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/plugins.js"></script>
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/jquery.main.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/dot/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:40:08 GMT -->

</html>
