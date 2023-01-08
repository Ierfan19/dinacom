<form action="{{url('/admin/user/update')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$user->id}}">
    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="submit">Ubah</button>
        <select name="role" class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
            @foreach($role as$row)
          <option value="{{$row->id}}" {{$hasrole->role_id == $row->id ? 'selected' : ''}}>{{$row->name}}</option>
          @endforeach
        </select>
      </div>
</form>