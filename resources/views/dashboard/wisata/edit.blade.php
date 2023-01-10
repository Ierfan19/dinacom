@extends('dashboard.layout.main')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;">
                                <ion-icon name="home-outline"></ion-icon>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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


        <div class="row">
            <div class="col-xl-12 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Edit Wisata</h6>
                            <hr>
                            <form class="row g-3" action="{{ url('/admin/wisata/edit') }}" method="post"
                                enctype="multipart/form-data">
                                <div class="col-12">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $wisata->id }}">
                                    <label class="form-label">Nama WIsata</label>
                                    <input name="nama" value="{{ $wisata->nama }}" type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Deskripsi WIsata</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $wisata->deskripsi }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Alamat WIsata</label>
                                    <input name="alamat" value="{{ $wisata->alamat }}" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="gambar">Gambar</label>
                                    <input class="form-control" id="gambar"
                                        onchange="document.getElementById('showimg').src = window.URL.createObjectURL(this.files[0]);"
                                        type="file" name="gambar">
                                    <img src="{{ asset('/') }}{{ $wisata->gambar }}" alt="" width="200"
                                        id="showimg">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="user">Pengurus</label>
                                    <select class="js-example-basic-multiple form-control" name="user_id"
                                        multiple="multiple">
                                        @foreach ($user as $row)
                                            <option
                                                value="{{ $row->id }}"{{ $user1->id == $row->id ? 'selected' : '' }}>
                                                {{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
