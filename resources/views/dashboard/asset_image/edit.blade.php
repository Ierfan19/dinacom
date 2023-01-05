<form action="{{url('/admin/asset-image/edit')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}
    <div class="p2">
        <input type="hidden" name="id" value="{{$slider->id}}">
        <div class="form-group">
            <label class="form-label" for="slide_header">Slide Header</label>
            <input required class="form-control" id="slide_header" onchange="document.getElementById('showimg1').src = window.URL.createObjectURL(this.files[0]);" type="file" name="slide_header">
            <img src="{{asset('/')}}{{$slider->slide_header}}" alt="" width="200" id="showimg1">
        </div>



        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        <div class="d-none">

        </div>
    </div>
</form>