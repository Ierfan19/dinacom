<!DOCTYPE html>
<html>

<!-- Mirrored from htmlbeans.com/html/dot/single-postv2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:42:23 GMT -->

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
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/responsive.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/colors.css">
</head>

<body class="version-ii">
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
        <!-- w1 of the page -->
        <div class="w1">
            <!-- header of the page -->
            <header id="header" class="version-ii">
                <div class="container tes">
                </div>
                <div class="stick-holder">
                    <div class="container">
                        <div class="row holder">
                            <div class="col-xs-3 col-sm-2">
                                <!-- Logo of the page -->
                                <div class="logo"><a href="home.html"><img src="images/logo2.png" alt="dot"></a>
                                </div>
                                <!-- Logo of the page end -->
                            </div>
                            <div class="col-xs-9 col-sm-10 nav-holder">
                                <!-- Nav of the page -->
                                <nav id="nav" class="navbar navbar-default">
                                    <!-- Navbar Header of the page -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Navbar Header of the page end -->
                                    <a href="#" class="pull-right icon-menu"><span class="ico-menu"></span></a>
                                    <!-- Collapse of the page -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active" data-drop="drop-right">
                                                <a href="{{ url('/') }}">Home</a>
                                                <!-- drop of the page end -->
                                            <li class="" data-drop="drop-right">
                                                <a href="{{ url('/wisata') }}">Wisata</a>
                                                <!-- drop of the page end -->
                                            </li>
                                            <li class="" data-drop="drop-right">
                                                <a href="{{ url('/produk') }}">Produk</a>
                                                <!-- drop of the page end -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Collapse of the page end -->
                                </nav>
                                <!-- Nav of the page -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side Nav of the page -->
                <nav class="side-nav">
                    <a href="#" class="close"><i class="fa fa-times"></i></a>
                    <!-- Widget of the page -->
                    <h2>About me</h2>
                    <section class="widget profile-widget">
                        {{-- <div class="profile-pic">
                            <a href="#">
                                <img src="images/img11.jpg" alt="John Aston">
                            </a>
                        </div> --}}
                        <h3><a href="#">Donorojo</a></h3>
                        <p>Kecamatan Donorojo Kab Jepara</p>
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            {{-- <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                            <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                            <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon ico-pinterest"></span></a></li> --}}
                        </ul>
                        <!-- Social Network of the page end -->
                    </section>
                    <!-- Widget of the page end -->
                </nav>
                <!-- Side Nav of the page end -->
            </header>
            <!-- Header of the page end -->
            <!-- Main of the page -->

            <main id="main" role="main">
                <!-- Page Head of the page -->
                <header class="page-head" style="background-image: url({{ asset('/') }}{{ $wisata->gambar }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-dark">
                                <h1>Detail Wisata</h1>
                                <ol class="breadcrumb">
                                    <li><a href="home.html">Home</a></li>
                                    <li class="active">Detail Wisata</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Page Head of the page -->
                <div class="container">
                    <div class="row">
                        <!-- Content of the page -->
                        <article id="content" class="col-xs-12">
                            <!-- Single Postv2 of the page -->
                            <div class="single-postv2">
                                <div class="img-holder">
                                    <img src="{{ asset('/') }}{{ $wisata->gambar }}" alt="image description">
                                </div>
                                <div class="center-block" style="margin-top: 20px;">
                                    {{-- <time datetime="2011-01-12"><a href="#">25th May - Travel</a></time> --}}
                                    <h2>{{ $wisata->nama }}</h2>
                                    {{-- <div class="info">
                                <strong class="text"><span class="icon ico-user"></span><a href="#">David
                                        Ramon</a></strong>
                                <strong class="text"><span class="icon ico-comment"></span><a href="#">25
                                        comments</a></strong>
                                <strong class="text"><span class="icon ico-share"></span><a href="#">138
                                        shares</a></strong>
                            </div> --}}
                                    <p>{!! $wisata->deskripsi !!}</p>
                                </div>
                                <div class="instagram-slider container-fluid">
                                    <div class="row">
                                        <div class="mask">
                                            <div class="slideset">
                                                @foreach ($galery as $row)
                                                    <div class="slide">
                                                        <a href="#"><img
                                                                src="{{ asset('/') }}{{ $row->nama }}"
                                                                alt="image description"></a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Postv2 of the page end -->
                            <!-- Widget of the page -->
                            <!-- Widget of the page end -->
                            <!-- Recent Post of the page -->
                            <section class="recent-posts">
                                <header class="header">
                                    <h2>Recent post</h2>
                                    <p>you may love this post</p>
                                </header>
                                <ul>
                                    @foreach ($wisata2 as $row)
                                        <li>
                                            <div class="holder">
                                                <div class="img-holder"><img
                                                        src="{{ asset('/') }}{{ $row->gambar }}"
                                                        alt="image description"></div>
                                                <h3><a
                                                        href="{{ url('/wisata') }}/{{ $row->nama }}">{{ $row->nama }}</a>
                                                </h3>
                                                {{-- <time datetime="2011-01-12"><a href="#">23rd May, 2016</a></time> --}}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                            <!-- Recent Post of the page end -->
                            <!-- Comment of the page -->
                            <!-- Comment of the page end -->
                            <!-- Comment Respond of the page -->
                            <!-- Comment Respond of the page end -->
                        </article>
                        <!-- Content of the page end -->
                    </div>
                </div>
            </main>
            <!-- Main of the page -->
            <!-- Social of the page -->
            <!-- Aside of the page end -->
            <!-- Footer of the page -->
            <footer id="footer" class="container version-ii">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>&copy; 2023 Copyright 2023, <a href="home.html">Desoku</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            {{-- <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li> --}}
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                </div>
            </footer>
            <!-- Footer of the page end -->
            <!-- Back Top of the page -->
            <span id="back-top" class="fa fa-angle-up"></span>
            <!-- Style Changer of the page -->
            <div id="style-changer" data-src="inc/style-changer.html"></div>
        </div>
    </div>
    <input type="hidden" name="id" id="id" value="{{ $wisata->id }}">
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/jquery.js"></script>
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/plugins.js"></script>
    <!-- include jQuery -->
    <script src="{{ asset('/frontend') }}/js/jquery.main.js"></script>
    <script>
        $(document).ready(function() {
            updateviewer()
        })

        function updateviewer() {
            var id = $('#id').val()
            $.ajax({
                type: "get",
                url: "{{ url('update-viewer-wisata') }}/" + id,
                data: {},
                success: function() {}
            })
        }
    </script>

</body>

<!-- Mirrored from htmlbeans.com/html/dot/single-postv2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 14:44:07 GMT -->

</html>
