<form action="{{url('/admin/galery/tambah')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}
    <div class="card-body">

        <!-- <div class="form-group">
            <label class="form-label" for="icon">Icon</label>
            <input require class="form-control" id="icon" onchange="document.getElementById('showimg1').src = window.URL.createObjectURL(this.files[0]);" type="file" name="icon">
            <img src="" alt="" width="200" id="showimg1">
        </div>

        <div class="form-group">
            <label class="form-label" for="logo">logo</label>
            <input require class="form-control" id="logo" onchange="document.getElementById('showimg2').src = window.URL.createObjectURL(this.files[0]);" type="file" name="logo">
            <img src="" alt="" width="200" id="showimg2">
        </div> -->
        
        <div class="form-group">
            <label class="form-label" for="nama">Nama / Ket</label>
            <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label class="form-label" for="gambar">gambar</label>
            <input required class="form-control" id="gambar" onchange="document.getElementById('showimg3').src = window.URL.createObjectURL(this.files[0]);" type="file" name="gambar">
            <img src="" alt="" width="200" id="showimg3">
        </div>

        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        <div class="d-none">

        </div>
    </div>
</form>