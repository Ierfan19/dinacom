<form action="{{url('/admin/comment/edit')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$comment->id}}">
            <label class="form-label" for="jawaban">Jawaban</label>
            <input class="form-control" type="text" name="jawaban" id="jawaban" value="{{$comment->jawaban}}">
        </div>
        <span>Tampilkan DI halaman</span>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_show" value="1" id="is_show1">
            <label class="form-check-label" for="is_show1">
                Tampilkan
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_show" value="0" id="is_show2">
            <label class="form-check-label" for="is_show2">
                Sembunyikan
            </label>
        </div>
        <div class="mt-3"></div>
        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
    </div>
</form>