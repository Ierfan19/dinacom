<form action="{{url('/admin/asset-image/tambah')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}
    <div class="p2">

        <!-- <div class="form-group">
            <label class="form-label" for="icon">Icon</label>
            <input require class="form-control" id="icon" onchange="document.getElementById('showimg1').src = window.URL.createObjectURL(this.files[0]);" type="file" name="icon">
            <img src="" alt="" width="200" id="showimg1">
        </div>

        <div class="form-group">
            <label class="form-label" for="logo">logo</label>
            <input require class="form-control" id="logo" onchange="document.getElementById('showimg2').src = window.URL.createObjectURL(this.files[0]);" type="file" name="logo">
            <img src="" alt="" width="200" id="showimg2">
        </div> -->
        <div class="form-group">
            <label class="form-label" for="slide">slide</label>
            <input required class="form-control" id="slide" onchange="document.getElementById('showimg3').src = window.URL.createObjectURL(this.files[0]);" type="file" name="slide">
            <img src="" alt="" width="200" id="showimg3">
        </div>

        <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        <div class="d-none">

        </div>
    </div>
</form>