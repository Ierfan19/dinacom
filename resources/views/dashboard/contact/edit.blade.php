<form action="{{url('/admin/contact/edit')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$contact->id}}">
            <label class="form-label" for="no_telp">No Telp</label>
            <input class="form-control" type="text" name="no_telp" id="no_telp" value="{{$contact->no_telp}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" value="{{$contact->email}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="alamat">Alamat</label>
            <input class="form-control" type="text" name="alamat" id="alamat" value="{{$contact->alamat}}">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>