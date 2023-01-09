@extends('user.layout.main')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
@section('content')
    <div class="page-content">
        <!--end row-->

        <div class="card radius-10">
            <div class="card-header border-bottom-0 bg-transparent">
                <div class="d-lg-flex align-items-center">
                    <div>
                        <h6 class="font-weight-bold mb-2 mb-lg-0">List Event</h6>
                    </div>
                    <div>
                        <a class="btn btn-success radius-10 ms-lg-3" onclick="tambah()" href="javascript:;">Tambah</a>
                        <!-- <button type="button"></button> -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Gambar
                            </td>
                            <td>
                                Nama Event
                            </td>
                            <td>
                                Keterangan
                            </td>
                            <td>
                                Tgl
                            </td>
                            <td>
                                Action
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($event as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <img src="{{ asset('/') }}{{ $row->gambar }}" width="200"
                                        style="object-fit: cover;height:200px;" alt="">
                                </td>
                                <td>
                                    {{ $row->nama }}
                                </td>
                                <td>
                                    {{ $row->keterangan }}
                                </td>
                                <td>
                                    {{ $row->tgl }}
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="edit('{{ $row->id }}')"
                                        class="btn btn-primary">Edit</a>
                                    <a onclick="return confirm('Apa Anda Yakin??')"
                                        href="{{ url('/user/event/hapus/') }}/{{ $row->id }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"
        integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script>
        function edit(id) {
            $.get("{{ url('/user/event/edit') }}/" + id, {}, function(data, status) {
                $('#judul').html('Edit Event');
                $('#page').html(data);
                $('#event').modal('show');
            });
        }

        function tambah() {
            $.get("{{ url('/user/event/tambah') }}/", {}, function(data, status) {
                $('#judul').html('Tambah Event');
                $('#page').html(data);
                $('#event').modal('show');
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
