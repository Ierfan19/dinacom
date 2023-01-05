<!DOCTYPE html>
<html>

<!-- Mirrored from htmlbeans.com/html/dot/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:38:11 GMT -->

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dot – Personal Blog</title>
    <!-- include the site stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/slick.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/responsive.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/colors.css">
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
        <aside class="aside footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 holder">
                        <div class="col">
                            <!-- logo of the page -->
                            <div class="logo">
                                <a href="#">
                                    <img src="{{asset('/frontend')}}/images/logo2.png" alt="dot">
                                </a>
                            </div>
                            <!-- logo of the page end -->
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            <!-- Social Network of the page -->
                            <ul class="social-networks">
                                <li><a href="#"><span class="ico-facebook"></span></a></li>
                                <li><a href="#"><span class="ico-twitter"></span></a></li>
                                <li><a href="#"><span class="ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="ico-pinterest"></span></a></li>
                            </ul>
                            <!-- Social Network of the page -->
                        </div>
                        <!-- footer nav of the page -->
                        <nav class="col footer-nav">
                            <h3>Important Links</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </nav>
                        <!-- footer nav of the page end -->
                        <!-- Widget holder of the page -->
                        <div class="col widget-holder">
                            <h3>Popular Posts</h3>
                            <div class="widget recent-posts-widget">
                                <ol>
                                    <li>
                                        <h4><a href="single-post.html">I get up in the morning looking <br>for an adventure.</a></h4>
                                        <span class="post-tag">
                                            <time datetime="2011-01-12"><a href="#">21st Jan</a></time>
                                        </span>
                                    </li>
                                    <li>
                                        <h4><a href="single-post.html">I get up in the morning looking <br>for an adventure.</a></h4>
                                        <span class="post-tag">
                                            <time datetime="2011-01-12"><a href="#">21st Jan</a></time>
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- Widget holder of the page end -->
                        <div class="col">
                            <h3>Subscribe to Newsletter</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
                            <!-- subscribe form of the page -->
                            <form action="#" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email here">
                                    <button type="button" class="ico-send"></button>
                                </div>
                            </form>
                            <!-- subscribe form of the page end -->
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- aside of the page end -->
        <!-- footer of the page -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>&copy; 2016 Copyright 2016, <a href="home.html">Dot</a>. All Rights Reserved</p>
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
    <script src="{{asset('/frontend')}}/js/jquery.js"></script>
    <!-- include jQuery -->
    <script src="{{asset('/frontend')}}/js/plugins.js"></script>
    <!-- include jQuery -->
    <script src="{{asset('/frontend')}}/js/jquery.main.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/dot/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:40:08 GMT -->

</html>