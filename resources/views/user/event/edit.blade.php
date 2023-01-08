
                                <form action="{{url('user/event/update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row mb-3">
                                        <input type="hidden" name="id" value="{{$event->id}}">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama Event</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$event->nama}}" name="nama" class="form-control" id="nama">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Keterangan Event</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{$event->keterangan}}" name="keterangan" class="form-control" id="keterangan">
                                       </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="contact" class="col-sm-3 col-form-label">Foto</label>
                                        <div class="col-sm-9">
                                        
                                            <input class="form-control" id="gambar" onchange="document.getElementById('showimg').src = window.URL.createObjectURL(this.files[0]);" type="file" name="gambar">
                                            <img src="{{asset('/')}}{{$event->gambar}}" alt="" width="200" id="showimg"> </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tgl" class="col-sm-3 col-form-label">Tanggal Event</label>
                                        <div class="col-sm-9">
                                            <input type="date" value="{{$event->tgl}}" name="tgl" class="form-control" id="tgl" placeholder="tgl Penjualan">
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{Auth()->User()->id}}">
                                    <div class="row">
                                        <label for="gambar" class="col-sm-3 col-form-label">Wisata</label>
                                        <div class="col-sm-9">
                                            <select name="wisata_id" class="form-select" id="inputGroupSelect01">
                                                @foreach($wisata as$row)
                                              <option value="{{$row->id}}" {{$event->wisata_id == $row->id ? 'selected' : ''}}>{{$row->nama}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-info px-5">Kirim</button>
                                        </div>
                                    </div>
                                </form>