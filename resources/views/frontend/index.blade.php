@extends('frontend.layout.main')
@section('content')
    <main id="main" role="main">
        <div class="home-box">
            <section class="slideshow">
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(images/img73.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Lifestyle</strong></div>
                                        <h1>Life is an adventure, <br>it’s not a package tour.</h1>
                                        <a href="single-post.html">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(images/img01.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Sports</strong></div>
                                        <h1>The Best Fashion, <br>5 Outfits for a Party.</h1>
                                        <a href="single-post.html">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(images/img74.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Movies</strong></div>
                                        <h1>Thieves Of The Prison <br>Let there be no purpose.</h1>
                                        <a href="single-post.html">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(images/img75.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Internet</strong></div>
                                        <h1>I get up <br>looking for adventure.</h1>
                                        <a href="single-post.html">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
                <!-- slide of the page -->
                <div class="slide" style="background-image: url(images/img73.jpg);">
                    <div class="align-holder">
                        <div class="align">
                            <div class="container">
                                <div class="row">
                                    <header class="header col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                        <div class="title-box"><strong class="title">Donorojo</strong></div>
                                        <h1>Selamat Datang di Web Desoku</h1>
                                        <a href="single-post.html">continue reading</a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide of the page end -->
            </section>
            <!-- switcher of the page -->
            <div class="switcher">
                <div class="center-block">
                    <!-- switcher mask of the page -->
                    <div class="switcher-mask">
                        <!-- switcher slide of the page -->
                        @foreach ($wisata2 as $row)
                            <div class="slide">
                                <div class="switcher-slide">
                                    <div class="slide-holder">
                                        <div class="img-holder">
                                            <img src="{{ asset('/') }}{{ $row->gambar }}" alt="image description">
                                        </div>
                                        <h2><a href="{{ url('/wisata') }}/{{ $row->nama }}">{{ $row->nama }}</a>
                                        </h2>
                                        {{-- <time datetime="2011-01-12"><a href="#">2nd january, 2016</a></time> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- switcher slide of the page end -->
                    </div>
                    <!-- switcher mask of the page end -->
                </div>
            </div>
            <!-- slide of the page end -->
        </div>
        <!-- twocolumns of the page -->
        <div id="twocolumns">
            <div class="container">
                <div class="row">
                    <!-- Content of the page -->
                    <div id="content" class="col-xs-12 col-md-8">
                        <!-- widget of the page -->
                        <section class="widget profile-widget style1 hidden-md hidden-lg">

                            <h3><a href="#">Donorojo</a></h3>
                            <p>Kecamatan Donorojo Kab Jepara</p>
                            <!-- Social networks of the page -->
                            <ul class="social-networks justify">
                                {{-- <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li> --}}
                            </ul>
                            <!-- Social networks of the page end -->
                        </section>
                        <!-- widget of the page end -->
                        <!-- cols holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            @foreach ($wisata3 as $row)
                                <article class="post wow fadeInLeft" data-wow-delay="0.6s">
                                    <div class="img-holder"><a href="single-post.html"><img
                                                src="{{ asset('/') }}{{ $row->gambar }}" alt="image description"></a>
                                    </div>
                                    <div class="text-wrap">
                                        {{-- <time datetime="2011-01-12">25th May - <a href="#">Travel</a></time> --}}
                                        <h2><a href="single-post.html">{{ $row->nama }}</a></h2>
                                        <a href="single-post.html" class="link-more">Read more</a>
                                    </div>
                                </article>
                            @endforeach
                            <!-- post of the page end -->
                            <!-- post of the page -->
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <!-- cols-holder of the page end -->
                        <!-- cols holder of the page end -->
                        <!-- col holder of the page -->
                        <div class="cols-holder">
                            <!-- post of the page -->
                            <article class="post fluid text-center wow fadeInUp" data-wow-delay="0.6s">
                                <ul class="list-unstyled carousel">
                                    @foreach ($wisata3 as $row)
                                        <li>
                                            <div class="slide">
                                                <img src="{{ asset('/') }}{{ $row->gambar }}" alt="image description">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="text-wrap text-center">
                                    {{-- <time datetime="2011-01-12">12th April - <a href="#">World</a></time> --}}
                                    <h2><a href="single-post.html">Wisata Di Kecamatan Donorojo</a></h2>
                                    <p>Donorojo Adalah kecamatan yang memiliki cukup banyak wisata untuk di kunjungi</p>
                                    <a href="{{ url('/wisata') }}" class="link-more">read more</a>
                                </div>
                            </article>
                            <!-- post of the page end -->
                        </div>
                        <!-- cols holder of the page end -->
                        <!-- cols holder of the page -->
                        <!-- cols holder of the page end -->
                        <!-- Navigation of the page -->
                        {{-- <nav role="navigation" class="navigation pagination">
                            <div class="nav-links">
                                <a href="#" class="prev page-numbers">Prev post.</a>
                                <a href="#" class="page-numbers">1</a>
                                <span class="page-numbers current">2</span>
                                <span class="page-numbers dots hidden">…</span>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="next page-numbers">NEXT post.</a>
                            </div>
                        </nav> --}}
                        <!-- Navigation of the page end -->
                    </div>
                    <!-- Content of the page end -->
                    <!-- Sidebar of the page -->
                    <aside id="sidebar" class="col-xs-12 col-md-4">
                        <!-- Widget of the page -->
                        <section class="widget profile-widget style1 hidden-sm hidden-xs wow fadeInUp"
                            data-wow-delay="0.6s">
                            {{-- <div class="profile-pic">
                                <a href="#">
                                    <img src="{{ asset('/frontend') }}/images/img11.jpg" alt="John Aston">
                                </a>
                            </div> --}}
                            <h3><a href="#">Kecamatan Donorojo</a></h3>
                            <p>Kecamatan Donorojo Kab Jepara</p>
                            <!-- Social network of the page -->
                            <ul class="social-networks justify">
                                {{-- <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                                <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                                <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                                <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                                <li><a href="#"><span class="icon ico-pinterest"></span></a></li> --}}
                            </ul>
                            <!-- Social network of the page end -->
                        </section>
                        <!-- Widget of the page end -->
                        <!-- Widget of the page -->
                        <section class="widget recent-posts-widget wow fadeInUp" data-wow-delay="0.6s">
                            <header class="widget-head">
                                <h3>Wisata</h3>
                            </header>
                            <ol>
                                @foreach ($wisata as $row)
                                    <li>
                                        <h4><a href="{{ '/wisata' }}/{{ $row->nama }}">{{ $row->nama }}</a>
                                        </h4>
                                        {{-- <span class="post-tag">
                                            <time datetime="2011-01-12"><a href="#">25th may</a></time>
                                            <strong class="tag hot">HOT</strong>
                                        </span> --}}
                                    </li>
                                @endforeach
                            </ol>
                        </section>
                        <!-- Widget of the page end -->
                    </aside>
                    <!-- Sidebar of the page end -->
                </div>
            </div>
        </div>
        <!-- twocolumns of the page end -->
        <!-- Instagram Slider of the page -->
        <div class="instagram-slider container-fluid">
            <div class="row">
                <div class="mask">
                    <div class="slideset">
                        @foreach ($galery as $row)
                            <div class="slide">
                                <a href="#"><img src="{{ asset('/') }}{{ $row->gambar }}"
                                        alt="image description"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slider of the page end -->
    </main>
@endsection
