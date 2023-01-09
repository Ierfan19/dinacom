@extends('dashboard.layout.main')
@push('css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* .container{
                                                                                                                                         width:90%
                                                                                                                                         margin:10px auto;
                                                                                                                                        } */
        .portfolio-menu {
            text-align: center;
        }

        .portfolio-menu ul li {
            display: inline-block;
            margin: 0;
            list-style: none;
            padding: 10px 15px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all .5s ease;
        }

        .portfolio-item {
            /*width:100%;*/
        }

        .portfolio-item .item {
            /*width:303px;*/
            float: left;
            margin-bottom: 10px;
        }
    </style>
@endpush
@section('content')
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;">
                                <ion-icon name="home-outline"></ion-icon>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List View</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button"
                        class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start shop area-->
        <section class="shop-page">
            <div class="shop-container">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="row">

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center my-2">
                                        <h4>{{ $wisata->nama }}</h4>
                                    </div>
                                </div>
                                <a href="javascript:;" onclick="tambah('{{ $wisata->id }}')"
                                    class="btn btn-success">Tambah</a>
                                <div class="portfolio-item row">
                                    @foreach ($slide as $row)
                                        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm mb-2">
                                            <a onclick="edit('{{ $row->id }}')" href="javascript:;"
                                                class="fancylight popup-btn" data-fancybox-group="light">
                                                <img class="img-fluid" src="{{ asset('/') }}{{ $row->nama }}"
                                                    alt="">
                                            </a>

                                            @if ($row->status == 0)
                                                <span class="badge alert-danger">Hidden</span>
                                            @else
                                                <span class="badge alert-success">Publish</span>
                                            @endif
                                            <a class="badge alert-danger" onclick="return confirm('Apa Anda Yakin??')"
                                                href="{{ url('/admin/wisata/slidewisata/hapus') }}/{{ $row->id }}">Hapus</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
    </div>
    </section>
    <!--end shop area-->

    </div>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="wisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul"></h5>
                    <i class="bi bi-x-lg" style="font-size: 20px;" data-bs-dismiss="modal" aria-label="Close"></i>
                    <!-- <button type="button" class="btn-close"></button> -->
                </div>
                <div class="modal-body">
                    <div id="page"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function edit(id) {
            $.get("{{ url('/admin/wisata/edit') }}/" + id, {}, function(data, status) {
                $('#judul').html('Edit Status');
                $('#page').html(data);
                $('#wisata').modal('show');
            });
        }

        function tambah(id) {
            $.get("{{ url('/admin/wisata/slidewisata/tambah') }}/" + id, {}, function(data, status) {
                $('#judul').html('Tambah Slide');
                $('#page').html(data);
                $('#wisata').modal('show');
            });
        }
        // $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
        $('.portfolio-menu ul li').click(function() {
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter: selector
            });
            return false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endpush
