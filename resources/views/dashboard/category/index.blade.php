@extends('template.index')
@section('title',' Kategori')
@section('content')
<!-- top tiles -->
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row" style="display: inline-block;width:100%">
                <div class="row">
                    <div class="col-xs-4">
                        <form action="{{url('/admin/category')}}" method="get">
                            <div class="d-flex col-xs-2">

                                <input type="text" name="cari" class="form-control" placeholder="Cari Kategori.....">
                                <div class="col-xs-2"><button type="submit" class="me-3 btn btn-info"><i class="bi bi-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <form action="{{url('/admin/category')}}" method="get">
                            <div class="d-flex">

                                <select class="form-control" name="paginate" id="">
                                    <option value="10" {{$paginate == 10 ? 'selected' : ''}}>10</option>
                                    <option value="25" {{$paginate == 25 ? 'selected' : ''}}>25</option>
                                    <option value="50" {{$paginate == 50 ? 'selected' : ''}}>50</option>
                                    <option value="100" {{$paginate == 100 ? 'selected' : ''}}>100</option>
                                </select>
                                <button type="submit" class="btn btn-info"><i class="bi bi-arrow-right-circle"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-3 float-end">
                        <a href="#" class="btn btn-success" onclick="create()">Tambah Kategori</a>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Nama Kategori
                            </td>
                            <td>
                                Name Category
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama_kategori}}</td>
                            <td>{{$row->nama_kategori_en}}</td>
                            <td>
                                <a onclick="edit('{{$row->id}}')" href="#" class="badge py-2 px-3 badge-primary">Edit <i class="bi bi-pencil"></i></a>
                                <a href="{{('category/hapus/')}}{{$row->id}}" onclick="return confirm('Apa Anda Yakin??')" class="badge py-2 px-3  badge-danger">Hapus <i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-end">

                    jumlah kategori:{{$category->total()}}
                </div>
                {{$category->links()}}
                <!-- halaman:{{$category->currentPage()}} -->
                <!-- halaman:{{$category->perPage()}} -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
    function create() {
        $.get("{{url('/admin/category/create')}}", {}, function(data, status) {
            $('#judul').html('Tambah kategori');
            $('#page').html(data);
            $('#category').modal('show');
        });
    }

    function edit(id) {
        $.get("{{url('/admin/category/edit')}}/" + id, {}, function(data, status) {
            $('#judul').html('Edit Kategori');
            $('#page').html(data);
            $('#category').modal('show');
        });
    }


    function validationtambah() {

        if (
            $('#nama_kategori').val() == ''
        ) {
            alert('Nama category Harus Di isi!!')
            return false;
        } else {
            $('#tambahsubmit').click()
        }

    }
</script>
@endpush