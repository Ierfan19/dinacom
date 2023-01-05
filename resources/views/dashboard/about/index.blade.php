@extends('template.index')
@section('title',' About')
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


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                judul
                            </td>
                            <td>
                                Deskripsi
                            </td>
                            <td>
                                Deskripsi English
                            </td>
                            <td>
                                Gambar 1
                            </td>
                            <td>
                                Gambar 2
                            </td>
                            <td>
                                Gambar 3
                            </td>
                            <td>
                                Update At
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->judul}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td>{{$row->deskripsi_en}}</td>
                            <td> <img src="{{asset('/')}}/{{$row->images1}}" alt="" width="200"> </td>
                            <td> <img src="{{asset('/')}}/{{$row->images2}}" alt="" width="200"> </td>
                            <td> <img src="{{asset('/')}}/{{$row->images3}}" alt="" width="200"> </td>
                            <td>{{$row->updated_at}}</td>
                            <td>
                                <a onclick="edit('{{$row->id}}')" href="#" class="badge py-2 px-3 badge-primary">Edit <i class="bi bi-pencil"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    function edit(id) {
        $.get("{{url('/admin/about/edit')}}/" + id, {}, function(data, status) {
            $('#judul').html('Edit Deskripsi');
            $('#page').html(data);
            $('#about').modal('show');
        });
    }


    function validationtambah() {

        if (
            $('#deskripsi').val() == ''
        ) {
            alert('Deskripsi Harus Di isi!!')
            return false;
        } else {
            $('#tambahsubmit').click()
        }

    }
</script>
@endpush