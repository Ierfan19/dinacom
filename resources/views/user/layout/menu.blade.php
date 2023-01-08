<div class="nav-container">
    <div class="mobile-topbar-header">
        <div>
            <img src="{{asset('/dashuser')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Synadmin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <nav class="topbar-nav">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{url('/user')}}" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{url('/user/produk')}}">
                    <div class="parent-icon"><i class='bx bx-box'></i>
                    </div>
                    <div class="menu-title">Product</div>
                </a>
            </li>
            <li>
                <a href="{{url('/user/profile')}}">
                    <div class="parent-icon"><i class='bx bx-user'></i>
                    </div>
                    <div class="menu-title">Profile</div>
                </a>
            </li>
            @if(\Auth::user()->hasRole('pengurus_wisata'))
            <li>
                <a href="{{url('/user/event')}}">
                    <div class="parent-icon"><i class='bx bx-book-bookmark'></i>
                    </div>
                    <div class="menu-title">Event</div>
                </a>
            </li>
            @endif
        </ul>
    </nav>
</div>