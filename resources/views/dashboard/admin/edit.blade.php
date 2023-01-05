<form action="{{url('/admin/admin/edit')}}" method="post">
    {{csrf_field()}}
    <div class="p2">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$admin->id}}">
            <label class="form-label" for="name">Nama</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$admin->name}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{$admin->email}}">
        </div>
        <div class="form-group">
            <label class="form-label" for="password">password</label>
            <input class="form-control" type="text" name="password" id="password">
        </div>
        <button class="btn btn-primary" onclick="validationtambah()" type="button">Submit</button>
        <div class="d-none">

            <button class="btn btn-primary" type="submit" id="tambahsubmit">Submit</button>
        </div>
    </div>
</form>