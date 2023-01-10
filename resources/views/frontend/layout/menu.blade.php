<header id="header" class="version-i">
    <div class="stick-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-2">
                    <!-- logo of the page -->
                    <div class="logo"><a href="#"><img src="{{ asset('/img') }}/logo.png" style="min-width: 180px;"
                                width="400" alt="dot"></a>
                    </div>
                    <!-- logo of the page end -->
                </div>
                <div class="col-xs-9 col-sm-10 nav-holder">
                    <!-- Nav of the page -->
                    <nav id="nav" class="navbar navbar-default">
                        <!-- Navbar header of the page -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Navbar header of the page end -->
                        <!-- Collapse navbar collapse of the page -->
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
                        <!-- Collapse navbar collapse of the page end -->
                    </nav>
                    <!-- Nav of the page end -->
                </div>
            </div>
        </div>
    </div>
</header>
