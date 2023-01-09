@extends('user.layout.main')
@section('content')
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <h4>{{ $produk->nama }}</h4>
            </div>
        </div>
        <a href="javascript:;" onclick="tambah('{{ $produk->id }}')" class="btn btn-success">Tambah</a>
        <div class="portfolio-item row">
            @foreach ($slide as $row)
                <div class="item selfie col-lg-3 col-md-4 col-6 col-sm mb-2">
                    <a onclick="edit('{{ $row->id }}')" href="javascript:;" class="fancylight popup-btn"
                        data-fancybox-group="light">
                        <img class="img-fluid" src="{{ asset('/') }}{{ $row->nama }}" alt="">
                    </a>

                    @if ($row->status == 0)
                        <span class="badge alert-danger">Hidden</span>
                    @else
                        <span class="badge alert-success">Publish</span>
                    @endif
                    <a class="badge alert-danger" onclick="return confirm('Apa Anda Yakin??')"
                        href="{{ url('/user/slideproduk/hapus') }}/{{ $row->id }}">Hapus</a>
                </div>
            @endforeach
        </div>
    </div>



    <div class="modal fade" id="slide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            $.get("{{ url('/admin/produk/edit') }}/" + id, {}, function(data, status) {
                $('#judul').html('Edit Status');
                $('#page').html(data);
                $('#produk').modal('show');
            });
        }

        function tambah(id) {
            $.get("{{ url('/user/slideproduk/tambah') }}/" + id, {}, function(data, status) {
                $('#judul').html('Tambah Slide');
                $('#page').html(data);
                $('#slide').modal('show');
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
