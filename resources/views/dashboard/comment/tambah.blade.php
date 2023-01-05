<form action="{{url('/admin/comment/tambah')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label class="form-label" for="email">email</label>
            <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="form-label" for="pertanyaan">pertanyaan</label>
            <input class="form-control" type="text" name="pertanyaan" id="pertanyaan">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>