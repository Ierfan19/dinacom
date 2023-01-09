@extends('dashboard.layout.main')
@section('content')
<div class="page-content">
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
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Tambah Wisata</h6>
                        <hr>
                        <form class="row g-3" action="{{url('/admin/wisata/tambah')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="col-12">
                                <label class="form-label">Nama WIsata</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Deskripsi WIsata</label>
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Alamat WIsata</label>
                                <input name="alamat" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="gambar">Gambar</label>
                                <input required class="form-control" id="gambar" onchange="document.getElementById('showimg').src = window.URL.createObjectURL(this.files[0]);" type="file" name="gambar">
                                <img src="" alt="" width="200" id="showimg">
                            </div>
                            <!-- <div class="col-12">
                                <label class="form-label">Gambar</label>
                                <input type="text" class="form-control">
                            </div> -->
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
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endpush