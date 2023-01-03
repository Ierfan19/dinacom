@extends('user.layout.main')
@section('content')

<div class="page-content">
    <!--end row-->

    <div class="card radius-10">
        <div class="card-header border-bottom-0 bg-transparent">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h6 class="font-weight-bold mb-2 mb-lg-0">List Produk</h6>
                </div>
                <div>
                    <a class="btn btn-success radius-10 ms-lg-3" href="{{asset('/user/produk/tambah')}}">Tambah</a>
                    <!-- <button type="button"></button> -->
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Gambar
                        </td>
                        <td>
                            Nama Produk
                        </td>
                        <td>
                            Alamat
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $row)

                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <img src="{{asset('/')}}{{$row->gambar}}" width="200" alt="">
                        </td>
                        <td>
                            {{$row->nama}}
                        </td>
                        <td>
                            {{$row->alamat}}
                        </td>
                        <td>
                            <a href="{{ route('user.produk.edit', ['id'=> Crypt::encrypt($row->id) ]) }}" class="btn btn-primary">Edit</a>
                            <a onclick="return confirm('Apa Anda Yakin??')" href="{{url('/user/produk/hapus/')}}/{{$row->id}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection