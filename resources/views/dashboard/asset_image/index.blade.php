@extends('template.index')
@section('title',' Asset')
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

                    <div class="col-xs-3 float-end">
                    </div>
                </div>

                <table class="table table-striped">
                    <h2>Logo & Favicon</h2>
                    <thead>
                        <tr>
                            <td>
                                Icon
                            </td>
                            <td>
                                Logo
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <img src="{{asset('/')}}{{$icon->favicon}}" width="100" alt=""> </td>
                            <td> <img src="{{asset('/')}}{{$icon->logo}}" width="100" alt=""> </td>
                            <td>
                                <a onclick="editIconLogo('{{$icon->id}}')" href="#" class="badge py-2 px-3 badge-primary">Edit <i class="bi bi-pencil"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <h2>Slider Header</h2>
                    <a href="#" class="btn btn-success" onclick="create()">Tambah Slide</a>
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Gambar
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slider as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> <img src="{{asset('/')}}{{$row->slide_header}}" width="400" alt=""> </td>
                            <td>
                                <a onclick="edit('{{$row->id}}')" href="#" class="badge py-2 px-3 badge-primary">Edit <i class="bi bi-pencil"></i></a>
                                <a href="{{url('admin/asset-image/hapus/')}}/{{$row->id}}" onclick="return confirm('Apa Anda Yakin??')" class="badge py-2 px-3  badge-danger">Hapus <i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        $.get("{{url('/admin/asset-image/create')}}", {}, function(data, status) {
            $('#judul').html('Tambah Slider');
            $('#page').html(data);
            $('#slider').modal('show');
        });
    }

    function edit(id) {
        $.get("{{url('/admin/asset-image/edit')}}/" + id, {}, function(data, status) {
            $('#judul').html('Edit Slider');
            $('#page').html(data);
            $('#slider').modal('show');
        });
    }

    function editIconLogo(id) {
        $.get("{{url('/admin/asset-image/edit-icon-logo')}}/" + id, {}, function(data, status) {
            $('#judul').html('Edit Icon & Logo');
            $('#page').html(data);
            $('#slider').modal('show');
        });
    }


    function validationtambah() {

        // if (
        //     $('#name').val() == ''
        // ) {
        //     alert('Nama admin Harus Di isi!!')
        //     return false;
        // } else if (
        //     $('#email').val() == ''
        // ) {
        //     alert('Email admin Harus Di isi!!')
        //     return false;
        // } else if (
        //     $('#password').val() == ''
        // ) {
        //     alert('password admin Harus Di isi!!')
        //     return false;
        // } else {
        //     $('#tambahsubmit').click()
        // }

    }
</script>
@endpush