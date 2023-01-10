@extends('frontend.layout.main')
@section('content')
    <main id="main" role="main">
        <!-- Page head of the page -->
        <header class="page-head wow fadeInUp" data-wow-delay="0.6s" style="background-image: url(images/img52.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Produk Donorojo</h1>
                        <ol class="breadcrumb">
                            <li><a href="home.html">Home</a></li>
                            <li class="active">Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page head of the page end -->
        <div id="twocolumns" class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-header">
                        <strong class="title">Produk</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Content of the page -->
                <div id="content" class="col-xs-12 col-md-8">
                    <!-- Widget of the page -->
                    <div class="widget widget_search hidden-md hidden-lg">
                        <form method="get" class="search-form" action="{{ url('/produk') }}">
                            <fieldset>
                                <input type="search" name="cari" placeholder="Type to search here">
                                <button type="button" class="ico-search"></button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Widget of the page end -->
                    <!-- Widget of the page -->
                    <section class="widget profile-widget version-ii hidden-lg hidden-md">
                        {{-- <div class="profile-pic">
                            <a href="#">
                                <img src="images/img11.jpg" alt="John Aston">
                            </a>
                        </div> --}}
                        <h3><a href="#"><img src="images/text-jhon-aston.png" alt="jhon aston"></a></h3>
                        <p>Kecamatan Donorojo</p>
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            {{-- <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                            <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                            <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon ico-pinterest"></span></a></li> --}}
                        </ul>
                        <!-- SOcial Network of the page end -->
                    </section>
                    <!-- Widget of the page end -->
                    <!-- Posts Blocks of the page -->
                    <section class="posts-blocks">
                        <!-- Post Block of the page -->
                        @foreach ($produk as $row)
                            <article class="post-block wow fadeInUp" data-wow-delay="0.6s">
                                <div class="post-holder">
                                    <div class="img-holder">
                                        <a href="{{ url('/produk') }}/{{ $row->nama }}"><img
                                                src="{{ asset('/') }}{{ $row->gambar }}" alt="image description"></a>
                                    </div>
                                    {{-- <time datetime="2011-01-12"><a href="#">25th May - Travel</a></time> --}}
                                    <h2><a href="{{ url('/produk') }}/{{ $row->nama }}">{{ $row->nama }}</a></h2>
                                    <p>{{ $row->nama }}</p>
                                    <a href="{{ url('/produk') }}/{{ $row->nama }}" class="read-more">Read more</a>
                                    {{-- <footer>
                                        <strong class="text comment-count"><span class="icon ico-comment"></span><a
                                                href="#">25 comments</a></strong>
                                        <strong class="text share-count"><span class="icon ico-share"></span><a
                                                href="#">138 shares</a></strong>
                                    </footer> --}}
                                </div>
                            </article>
                        @endforeach
                    </section>
                    <!-- Posts Blocks of the page end -->
                    <!-- Navigation of the page -->
                    <nav role="navigation" class="navigation pagination">
                        <div class="nav-links">
                            {{ $produk->links() }}
                        </div>
                    </nav>
                    <!-- Navigation of the page end -->
                </div>
                <!-- Sidebar of the page -->
                <aside id="sidebar" class="col-xs-12 col-md-4">
                    <!-- Widget of the page -->
                    <section class="widget profile-widget version-ii hidden-sm hidden-xs wow fadeInUp"
                        data-wow-delay="0.6s">
                        {{-- <div class="profile-pic">
                            <a href="#">
                                <img src="images/img11.jpg" alt="John Aston">
                            </a>
                        </div> --}}
                        {{-- <h3><a href="#"><img src="images/text-jhon-aston.png" alt="jhon aston"></a></h3> --}}
                        <p>Kecamatan Donorojo</p>
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
                    <!-- Widget of the page -->
                    <div class="widget widget_search hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
                        <form method="get" class="search-form" action="#">
                            <fieldset>
                                <input type="search" name="s" placeholder="Type to search here">
                                <button type="button" class="ico-search"></button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Widget of the page end -->
                    <!-- Widget of the page -->
                    <section class="widget recent-posts-widget version-ii wow fadeInUp" data-wow-delay="0.6s">
                        <header class="tab-head">
                            <h3><a class="active" href="#tab1">Recent Posts</a></h3>
                            <h3><a href="#tab2">Popular Posts</a></h3>
                        </header>
                        <div class="tab-content">
                            <div id="tab1">
                                <ul>
                                    @foreach ($produk2 as $row)
                                        <li>
                                            <div class="alignleft">
                                                <img src="{{ asset('/') }}{{ $row->gambar }}" alt="image description">
                                            </div>
                                            <div class="descr">
                                                <h4><a
                                                        href="{{ url('/produk') }}/{{ $row->nama }}">{{ $row->nama }}</a>
                                                </h4>
                                                <span class="post-tag">
                                                    {{-- <time datetime="2011-01-12"><a href="#">25th may</a></time> --}}
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab2">
                                <ul>
                                    @foreach ($produk2 as $row)
                                        <li>
                                            <div class="alignleft">
                                                <img src="{{ asset('/') }}{{ $row->gambar }}" alt="image description">
                                            </div>
                                            <div class="descr">
                                                <h4><a
                                                        href="{{ url('/produk') }}/{{ $row->nama }}">{{ $row->nama }}</a>
                                                </h4>
                                                <span class="post-tag">
                                                    {{-- <time datetime="2011-01-12"><a href="#">25th may</a></time> --}}
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Widget of the page end -->
                </aside>
                <!-- Sidebar of the page end -->
            </div>
        </div>
        <!-- Instagram Slider of the page -->
        <div class="instagram-slider version-ii container-fluid wow fadeInUp" data-wow-delay="0.6s">
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
