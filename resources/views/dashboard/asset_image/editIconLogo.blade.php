<form action="{{url('/admin/asset-image/update-icon-logo')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}
    <div class="p2">
        <input type="hidden" name="id" value="{{$icon->id}}">
        <div class="form-group">
            <label class="form-label" for="favicon">favicon</label>
            <input required class="form-control" id="favicon" onchange="document.getElementById('showimg1').src = window.URL.createObjectURL(this.files[0]);" type="file" name="favicon">
            <img src="{{asset('/')}}{{$icon->favicon}}" alt="" width="200" id="showimg1">
        </div>

        <div class="form-group">
            <label class="form-label" for="logo">logo</label>
            <input required class="form-control" id="logo" onchange="document.getElementById('showimg2').src = window.URL.createObjectURL(this.files[0]);" type="file" name="logo">
            <img src="{{asset('/')}}{{$icon->logo}}" alt="" width="200" id="showimg2">
        </div>

        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        <div class="d-none">

        </div>
    </div>
</form>