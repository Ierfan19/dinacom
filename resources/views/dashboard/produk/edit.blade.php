<form action="{{url('/admin/produk/update')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$produk->id}}">
    <div class="d-flex mb-2">
        <input type="radio" style="width:20px;margin: right 10px;" name="status" id="1" value="1"> <label class="ms-2" for="1">Tampilkan</label>
    </div>
    <div class="d-flex mb-2">
        <input type="radio" style="width:20px;margin: right 10px;" name="status" id="0" value="0"> <label class="ms-2" for="0">Sembunyikan</label>
    </div>
    <button class="btn btn-primary mt-3" type="submit">Edit</button>
</form>