<form action="{{url('/admin/admin/tambah')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <label class="form-label" for="name">Nama</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>