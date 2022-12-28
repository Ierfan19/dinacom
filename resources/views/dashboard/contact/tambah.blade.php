<form action="{{url('/admin/category/tambah')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <label class="form-label" for="nama_kategori">Nama Categori</label>
            <input class="form-control" type="text" name="nama_kategori" id="nama_kategori">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>