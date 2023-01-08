@extends('user.layout.main')
@section('content')

<div class="page-content">
    <!--end row-->
    <div class="card radius-10">
        <div class="card-body">

            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <!-- <h6 class="mb-0 text-uppercase">Tambah Produk</h6> -->
                    <hr />
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                    </div>
                                    <h5 class="mb-0 text-info">Tambah Produk</h5>
                                </div>
                                <hr />
                                <form action="{{url('user/produk/store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">deskripsi Produk</label>
                                        <div class="col-sm-9">
                                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="contact" class="col-sm-3 col-form-label">No Telp</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="contact" class="form-control" id="contact" placeholder="Phone No">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Penjualan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Penjualan">
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{Auth()->User()->id}}">
                                    <div class="row mb-3">
                                        <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input required class="form-control" id="gambar" onchange="document.getElementById('showimg').src = window.URL.createObjectURL(this.files[0]);" type="file" name="gambar">
                                            <img src="" alt="" width="200" id="showimg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Kirim</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
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