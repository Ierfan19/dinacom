<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/synadmin-laravel/horizontal/public/sales by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 04:03:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('/dashuser')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
		<link href="{{asset('/dashuser')}}/assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link href="{{asset('/dashuser')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		<link href="{{asset('/dashuser')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('/dashuser')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('/dashuser')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('/dashuser')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('/dashuser')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('/dashuser')}}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('/dashuser')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="{{asset('/dashuser')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('/dashuser')}}/assets/css/icons.css" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('/dashuser')}}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{asset('/dashuser')}}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{asset('/dashuser')}}/assets/css/header-colors.css" />
    <title>Synadmin – Bootstrap5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		<header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="topbar-logo-header">
                            <div class="">
                                <img src="{{asset('/dashuser')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                            </div>
                            <div class="">
                                <h4 class="logo-text">Synadmin</h4>
                            </div>
                        </div>
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                        <div class="top-menu-left d-none d-lg-block ps-3">
                            <ul class="nav">
                              <li class="nav-item">
                                <a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
                              </li>
                          </ul>
                         </div>
                        <div class="search-bar flex-grow-1">
                            <div class="position-relative search-bar-box">
                                <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                                <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                            </div>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#">   <i class='bx bx-search'></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="row row-cols-3 g-3 p-3">
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
                                                </div>
                                                <div class="app-title">Teams</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
                                                </div>
                                                <div class="app-title">Projects</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
                                                </div>
                                                <div class="app-title">Tasks</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
                                                </div>
                                                <div class="app-title">Feeds</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                                </div>
                                                <div class="app-title">Files</div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
                                                </div>
                                                <div class="app-title">Alerts</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                        <i class='bx bx-bell'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Notifications</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-notifications-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                    ago</span></h6>
                                                        <p class="msg-info">5 new user registered</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                    ago</span></h6>
                                                        <p class="msg-info">You have recived new orders</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                                                    ago</span></h6>
                                                        <p class="msg-info">The pdf files generated</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                                                    ago</span></h6>
                                                        <p class="msg-info">5.1 min avarage time response</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Product Approved <span
                                                    class="msg-time float-end">2 hrs ago</span></h6>
                                                        <p class="msg-info">Your new product has approved</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">New customer comments recived</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">Successfully shipped your item</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                                                    ago</span></h6>
                                                        <p class="msg-info">24 new authors joined last week</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                                                    ago</span></h6>
                                                        <p class="msg-info">45% less alerts last 4 weeks</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Notifications</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                        <i class='bx bx-comment'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Messages</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-message-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                    ago</span></h6>
                                                        <p class="msg-info">The standard chunk of lorem</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                                                    sec ago</span></h6>
                                                        <p class="msg-info">Many desktop publishing packages</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
                                                    ago</span></h6>
                                                        <p class="msg-info">Various versions have evolved over</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                                                    min ago</span></h6>
                                                        <p class="msg-info">Making this the first true generator</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
                                                    ago</span></h6>
                                                        <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">The passage is attributed to an unknown</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">The point of using Lorem</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">It was popularised in the 1960s</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
                                                    ago</span></h6>
                                                        <p class="msg-info">Various versions have evolved over</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
                                                    ago</span></h6>
                                                        <p class="msg-info">If you are going to use a passage</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
                                                    ago</span></h6>
                                                        <p class="msg-info">All the Lorem Ipsum generators</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Messages</div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
						<div class="user-box dropdown border-light-2 justify-content-end">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">{{Auth()->User()->name}}</p>
                                <p class="designattion mb-0">{{Auth()->User()->no_telp}}</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{url('/user/profile')}}"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </header>
					<!--end header -->
		<!--navigation-->
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
        </ul>
    </nav>
</div>		<!--end navigation-->
		<!--start page wrapper -->
				<div class="page-wrapper">
			<div class="page-content">
			
			  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
			    <div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Orders</p>
										<h5 class="mb-0">867</h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-cart font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart1"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Income</p>
										<h5 class="mb-0">$52,945</h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart2"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Users</p>
										<h5 class="mb-0">24.5K</h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-group font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart3"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Comments</p>
										<h5 class="mb-0">869</h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-chat font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="chart4"></div>
						</div>
					</div>
			  </div><!--end row-->
			  
			  
			  <div class="row">
			    <div class="col-12 col-xl-8 d-flex">
				  <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="" id="chart5"></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-xl-4 d-flex">
				  <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Sales Target</h5>
									</div>
									<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
									</div>
								</div>
							<div class="mt-4" id="chart6"></div>
							<div class="d-flex align-items-center">
									<div>
										<h2 class="mb-0">2248</h2>
										<p class="mb-0">/2,800 target</p>
									</div>
									<div class="ms-auto d-flex align-items-center border radius-10 px-2">
									  <i class='bx bxs-checkbox font-22 me-1 text-primary'></i><span>Marketing Sales</span>
									</div>
							  </div>
						</div>
					</div>
				</div>
			  </div><!--end row-->


			  <div class="row row-cols-1 row-cols-xl-2">
				<div class="col d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="" id="chart7"></div>
						</div>
					</div>
				</div>
				<div class="col d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-1">Sales Report</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="" id="chart8"></div>
						</div>
					</div>
				</div>
			  </div><!--end row-->

			  <div class="row">
				<div class="col-12 col-xl-4 col-xxl-3 d-flex">
					<div class="card radius-10 w-100 overflow-hidden">
						<div class="card-body">
							<p class="mb-1">Overall Sales Performance</p>
							<div class="">
								<h2 class="mb-0">$84,126.5</h2>
								<p class="mb-0 text-success">+2.5% vs last month</p>
							</div>
						</div>
						<div class="" id="chart9"></div>
					</div>
				</div>
				<div class="col-12 col-xl-8 col-xxl-9 d-flex">
					<div class="card w-100 radius-10">
						<div class="row g-0">
						  <div class="col-md-4 border-end">
							<div class="card-body">
							  <h5 class="card-title">Top Sales Locations</h5>
							  <h2 class="mt-4 mb-1">25.860 <i class="flag-icon flag-icon-us rounded"></i></h2>
							  <p class="mb-0 text-secondary">Our Most Customers in US</p>
							</div>
							<ul class="list-group mt-4 list-group-flush">
								<li class="list-group-item d-flex align-items-center">
								  <i class='bx bxs-circle me-1 text-success'></i>
								  <span>Massive</span>
								  <strong class="ms-auto">18.4k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center">
								  <i class='bx bxs-circle me-1 text-danger'></i>
								  <span>Large</span>
								  <strong class="ms-auto">6.9k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center">
								  <i class='bx bxs-circle me-1 text-primary'></i>
								  <span>Medium</span>
								  <strong class="ms-auto">5.4k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center">
								  <i class='bx bxs-circle me-1 text-warning'></i>
								  <span>Small</span>
								  <strong class="ms-auto">875</strong>
								</li>
							</ul>
						  </div>
						  <div class="col-md-8">
							  <div class="p-3">
								<div class="" id="geographic-map"></div>
							  </div>
						  </div>
						</div>
					  </div>
				</div>
			  </div><!--end row-->

			   <div class="row">
				 <div class="col-12 col-xl-4 d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">New Customers</h5>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
						</div>
						<div class="customers-list p-3 mb-3">
							<div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Emy Jackson</h6>
									<p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Martin Hughes</h6>
									<p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Laura Madison</h6>
									<p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Shoan Stephen</h6>
									<p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-5.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Keate Medona</h6>
									<p class="mb-0 font-13 text-secondary">Keate@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-6.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Paul Benn</h6>
									<p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Winslet Maya</h6>
									<p class="mb-0 font-13 text-secondary">winslet_02@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Bruno Bernard</h6>
									<p class="mb-0 font-13 text-secondary">bruno.b@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Merlyn Dona</h6>
									<p class="mb-0 font-13 text-secondary">merlyn.d@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
							<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
								<div class="">
									<img src="{{asset('/dashuser')}}/assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Alister Campel</h6>
									<p class="mb-0 font-13 text-secondary">alister_42@xyz.com</p>
								</div>
								<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone' ></i></a>
									<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
								</div>
							</div>
						</div>
					</div>
				 </div>
				 <div class="col-12 col-xl-4 d-flex">
					<div class="card radius-10 w-100 overflow-hidden">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Store Metrics</h5>
								</div>
								<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
								</div>
							</div>
						</div>

						<div class="store-metrics p-3 mb-3">
							
                            <div class="card mt-3 radius-10 border shadow-none">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Products</p>
											<h4 class="mb-0">856</h4>
										</div>
										<div class="widgets-icons bg-light-primary text-primary ms-auto"><i class='bx bxs-shopping-bag' ></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card radius-10 border shadow-none">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Customers</p>
											<h4 class="mb-0">45,241</h4>
										</div>
										<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-group' ></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card radius-10 border shadow-none">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Categories</p>
											<h4 class="mb-0">98</h4>
										</div>
										<div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-category' ></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card radius-10 border shadow-none">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Orders</p>
											<h4 class="mb-0">124</h4>
										</div>
										<div class="widgets-icons bg-light-info text-info ms-auto"><i class='bx bxs-cart-add' ></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card radius-10 border shadow-none mb-0">
								<div class="card-body">
                                    <div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Vendors</p>
											<h4 class="mb-0">55</h4>
										</div>
										<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-user-account' ></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				 </div>

				 <div class="col-12 col-xl-4 d-flex">
					<div class="card radius-10 w-100 ">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-1">Top Products</h5>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
						</div>

						<div class="product-list p-3 mb-3">

							 <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/01.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Black Boost Chair</h6>
									<p class="mb-0">148 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$246.24</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/03.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Red Single Sofa</h6>
									<p class="mb-0">122 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$328.14</h6>
								</div>
							  </div>
							
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/04.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Pink Rounded Sofa</h6>
									<p class="mb-0">105 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$124.35</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/05.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Brown Single Table</h6>
									<p class="mb-0">201 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$158.34</h6>
								</div>
							  </div>
							  
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/06.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Grey Long Chair</h6>
									<p class="mb-0">146 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">158.24</h6>
								</div>
							  </div>
							  
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/07.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Beautiful Sofa</h6>
									<p class="mb-0">210 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$520.24</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/08.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Grey Stand Table</h6>
									<p class="mb-0">115 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$345.24</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/09.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Brown Single Table</h6>
									<p class="mb-0">116 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$126.24</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/10.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Four Leg Chair</h6>
									<p class="mb-0">154 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$425.24</h6>
								</div>
							  </div>
							 
							  <div class="d-flex align-items-center py-3 border-bottom cursor-pointer">
								<div class="product-img me-2">
									 <img src="{{asset('/dashuser')}}/assets/images/products/11.png" alt="product img">
								  </div>
								<div class="">
									<h6 class="mb-0 font-14">Blue Light T-Shirt</h6>
									<p class="mb-0">186 Sales</p>
								</div>
								<div class="ms-auto">
									<h6 class="mb-0">$149.34</h6>
								</div>
							  </div>
							 
						</div>
					</div>
				 </div>
				</div><!--end row-->


				<div class="row">
					<div class="col">
						<div class="card radius-10 mb-0">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Recent Orders</h5>
									</div>
									<div class="ms-auto">
										<a href="javscript:;" class="btn btn-primary btn-sm radius-30">View All Products</a>
									</div>
								</div>

                               <div class="table-responsive mt-3">
								   <table class="table align-middle mb-0">
									   <thead class="table-light">
										   <tr>
											   <th>Tracking ID</th>
											   <th>Products Name</th>
											   <th>Date</th>
											   <th>Status</th>
											   <th>Price</th>
											   <th>Actions</th>
										   </tr>
									   </thead>
									   <tbody>
										   <tr>
											   <td>#55879</td>
											   <td>
												<div class="d-flex align-items-center">
													<div class="recent-product-img">
														<img src="{{asset('/dashuser')}}/assets/images/products/15.png" alt="">
													</div>
													<div class="ms-2">
														<h6 class="mb-1 font-14">Light Red T-Shirt</h6>
													</div>
												</div>
											   </td>
											   <td>22 Jun, 2020</td>
											   <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
											   <td>#149.25</td>
											   <td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											   </td>
										   </tr>
										   <tr>
											<td>#88379</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/16.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Grey Headphone</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#68823</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/19.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Grey Hand Watch</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#54869</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/07.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Brown Sofa</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#22536</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/17.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Black iPhone 11</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#25796</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/14.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
										<tr>
											<td>#98754</td>
											<td>
											 <div class="d-flex align-items-center">
												 <div class="recent-product-img">
													 <img src="{{asset('/dashuser')}}/assets/images/products/08.png" alt="">
												 </div>
												 <div class="ms-2">
													 <h6 class="mb-1 font-14">Grey Stand Table</h6>
												 </div>
											 </div>
											</td>
											<td>22 Jun, 2020</td>
											<td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
											<td>#149.25</td>
											<td>
												<div class="d-flex order-actions">	<a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
													<a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
												</div>
											</td>
										</tr>
									   </tbody>
								   </table>
							   </div>
								
							</div>
						</div>
					</div>
				</div><!--end row-->
			
			</div>
		</div>
				<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr/>
            <h6 class="mb-0">Theme Styles</h6>
            <hr/>
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr/>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('/dashuser')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('/dashuser')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/metismenu/js/metisMenu.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="{{asset('/dashuser')}}/assets/js/app.js"></script>
		<script src="{{asset('/dashuser')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/highcharts/js/exporting.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/highcharts/js/export-data.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="{{asset('/dashuser')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{asset('/dashuser')}}/assets/js/index2.js"></script>
	<script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script>
	    </body>


<!-- Mirrored from codervent.com/synadmin-laravel/horizontal/public/sales by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 04:04:16 GMT -->
</html>
