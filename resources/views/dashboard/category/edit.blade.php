<form action="{{url('/admin/category/edit')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$category->id}}">
            <label class="form-label" for="nama_kategori">Nama Categori</label>
            <input class="form-control" type="text" name="nama_kategori" id="nama_kategori" value="{{$category->nama_kategori}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="nama_kategori_en">Nama Categori</label>
            <input class="form-control" type="text" name="nama_kategori_en" id="nama_kategori_en" value="{{$category->nama_kategori_en}}">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>