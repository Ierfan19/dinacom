<form action="{{url('/admin/about/edit')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <label class="form-label" for="judul">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul" value="{{$about->judul}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="judul_en">Judul English</label>
            <input class="form-control" type="text" name="judul_en" id="judul_en" value="{{$about->judul_en}}">
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="{{$about->id}}">
            <label class="form-label" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="6" rows="4">{{$about->deskripsi}}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="deskripsi_en">Deskripsi English</label>
            <textarea class="form-control" name="deskripsi_en" id="deskripsi_en" cols="6" rows="4">{{$about->deskripsi_en}}</textarea>
        </div>


        <span class="text-secondary">Edit Gambar Jika ada</span>
        <div class="form-group">
            <label class="form-label" for="images1">Gambar 1</label>
            <input class="form-control" id="images1" onchange="document.getElementById('showimg1').src = window.URL.createObjectURL(this.files[0]);" type="file" name="images1">
            <img src="{{asset('/')}}{{$about->images1}}" alt="" width="200" id="showimg1">
            <span class="text-danger">hapus</span>
            <input type="checkbox" name="cekimages1" id="">
        </div>
        <div class="form-group">
            <label class="form-label" for="images2">Gambar 2</label>
            <input class="form-control" id="images2" onchange="document.getElementById('showimg2').src = window.URL.createObjectURL(this.files[0]);" type="file" name="images2">
            <img src="{{asset('/')}}{{$about->images2}}" alt="" width="200" id="showimg2">
            <span class="text-danger">hapus</span>
            <input type="checkbox" name="cekimages2" id="">
        </div>
        <div class="form-group">
            <label class="form-label" for="images3">Gambar 3</label>
            <input class="form-control" id="images3" onchange="document.getElementById('showimg3').src = window.URL.createObjectURL(this.files[0]);" type="file" name="images3">
            <img src="{{asset('/')}}{{$about->images3}}" alt="" width="200" id="showimg3">
            <span class="text-danger">hapus</span>
            <input type="checkbox" name="cekimages3" id="">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>