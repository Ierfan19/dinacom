<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- cdn css, font --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:30x0,400,700%7CPoppins:400,300,500,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    {{-- css assets frontend --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" />
    {{-- css assets admin dashborad --}}
    <link href="{{asset('dashboard/assets/css/pace.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/header-colors.css')}}" rel="stylesheet" />
    {{-- <link href="{{asset('dashuser/assets/css/icons.css')}}" rel="stylesheet"> --}}
    {{-- js assets front end --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/plugins.js') }}" defer></script>
    <script src="{{ asset('js/jquery.main.js') }}" defer></script>
    {{-- js assets admin dashboard --}}
    <script src="{{asset('dashboard/assets/js/pace.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script type="module" src="../../../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script> --}}
    <script src="{{asset('/dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/js/index3.js')}}"></script>
    <script src="{{asset('/dashboard/assets/js/main.js')}}"></script>
    {{-- cdn js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>