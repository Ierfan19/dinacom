<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('/dashboard')}}/assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">SYN-UI</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li> <a href="{{url('/admin')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Dashboard
            </a>
        </li>
        <li> <a href="{{url('/admin/wisata')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Wisata
            </a>
        </li>
        <li> <a href="{{url('/admin/produk')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Produk
            </a>
        </li>
        <li> <a href="{{url('/admin/galery')}}">
                <ion-icon name="ellipse-outline"></ion-icon>Galery
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->

<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
        <!-- <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                <ion-icon name="search-sharp"></ion-icon>
            </div>
            <input class="form-control" type="text" placeholder="Search for anything">
            <div class="position-absolute top-50 translate-middle-y search-close-icon">
                <ion-icon name="close-sharp"></ion-icon>
            </div>
        </form> -->
        <div class="top-navbar-right ms-auto">

            <ul class="navbar-nav align-items-center">
                <!-- <li class="nav-item mobile-search-button">
                    <a class="nav-link" href="javascript:;">
                        <div class="">
                            <ion-icon name="search-sharp"></ion-icon>
                        </div>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link dark-mode-icon" href="javascript:;">
                        <div class="mode-icon">
                            <ion-icon name="moon-sharp"></ion-icon>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-large dropdown-apps">

                </li>
                <li class="nav-item dropdown dropdown-large">

                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </div>
                        <div class="ms-3"><span><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </span></div>
                    </div>
                </li>

            </ul>

        </div>
    </nav>
</header>