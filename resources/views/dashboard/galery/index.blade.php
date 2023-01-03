@extends('dashboard.layout.main')
@section('content')

<div class="page-content">

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Produk</h6>
            <hr>
            <div class="card">

                <div class="d-flex flex-wrap">
                    <form action="{{url('/admin/produk')}}" method="get">
                        <div class="d-flex align-items-center flex-nowrap">
                            <p class="mb-0 font-13 text-nowrap">Show:</p>

                            <select class="form-control ms-2" name="paginate" id="">
                                <option value="10" {{$paginate == 10 ? 'selected' : ''}}>10</option>
                                <option value="25" {{$paginate == 25 ? 'selected' : ''}}>25</option>
                                <option value="50" {{$paginate == 50 ? 'selected' : ''}}>50</option>
                                <option value="100" {{$paginate == 100 ? 'selected' : ''}}>100</option>
                            </select>
                            <div class="mx-2"></div>
                            <button type="submit" class="me-3 btn btn-info  text-white">
                                <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                            </button>
                            <input type="text" value="{{Request::get('cari')}}" name="cari" class="form-control" placeholder="Cari Wisata.....">
                            <div class="col-sm-2 ms-2"><button type="submit" class="me-3 btn btn-info"><i class="bi bi-search"></i></button></div>
                        </div>
                </div>
                <div class="d-flex col-sm-4">

                </div>
                </form>
                <div class="card-body">
                    <table class="table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produk as $row)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td><img src="{{asset('/')}}{{$row->gambar}}" width="200" alt=""></td>
                                <td>{{$row->nama}}</td>
                                <td>
                                    @if($row->status == 0)
                                    <p class="badge bg-danger">Hidden</p>
                                    @else
                                    <p class="badge bg-success">Publish</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="edit('{{$row->id}}')" class="btn btn-primary">Edit Status</a>
                                    <a onclick="return confirm('Apa Anda Yakin??')" href="{{url('/admin/produk/hapus')}}/{{$row->id}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <nav class="d-flex justify-content-between mt-4" aria-label="Page navigation">

                        {{$produk->links()}}
                    </nav>
                </div>
            </div>

        </div>
    </div>


</div>
<div class="modal fade" id="produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
    function edit(id) {
        $.get("{{url('/admin/produk/edit')}}/" + id, {}, function(data, status) {
            $('#judul').html('Edit Status');
            $('#page').html(data);
            $('#produk').modal('show');
        });
    }
</script>
@endpush