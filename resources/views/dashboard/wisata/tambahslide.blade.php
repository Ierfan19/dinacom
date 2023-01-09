<form action="{{ url('/admin/wisata/slidewisata/store') }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $wisata->id }}">
            <label class="form-label" for="gambar">gambar</label>
            <input required class="form-control" id="gambar"
                onchange="document.getElementById('showimg3').src = window.URL.createObjectURL(this.files[0]);"
                type="file" name="gambar">
            <img src="" alt="" width="200" id="showimg3">
        </div>

        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        <div class="d-none">

        </div>
    </div>
</form>
