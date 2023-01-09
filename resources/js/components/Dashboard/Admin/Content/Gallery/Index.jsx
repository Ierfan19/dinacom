import React from 'react'
import Menu from '../../Layouts/Menu'
import SwitcherBody from '../../Layouts/SwitcherBody'

const Index = () => {
    return (
        <>
            <Menu />
            <div className='wrapper'>
                <div className="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div class="breadcrumb-title pe-3">Tables</div>
                            <div class="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                                        <li class="breadcrumb-item"><a href="javascript:;">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">galery</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="ms-auto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <h6 class="mb-0 text-uppercase">galery</h6>
                                <hr />
                                <div class="card">
                                    <div class="d-flex flex-wrap">
                                        <form action="{{url('/admin/galery')}}" method="get">
                                            <div class="d-flex align-items-center flex-nowrap">
                                                <p class="mb-0 font-13 text-nowrap">Show:</p>

                                                <div class="mx-2"></div>
                                                <button type="submit" class="me-3 btn btn-info  text-white">
                                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                                </button>
                                                <input type="text" value="{{Request::get('cari')}}" name="cari" class="form-control" placeholder="Cari Gambar....." />
                                                <div class="col-sm-2 ms-2"><button type="submit" class="me-3 btn btn-info"><i class="bi bi-search"></i></button></div>
                                                <a href="#" onclick="tambah()" class="btn btn-success">Tambah</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="d-flex col-sm-4">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tgl</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {
                                                galery.data.map((value, i) => {
                                                    return <tr key={i}>
                                                        <th scope="row">{i + 1}</th>
                                                        <td><img src="{{asset('/')}}{{$row->gambar}}" width="200" style="object-fit: cover;height:200px;" alt="" /></td>
                                                        <td>{value.nama}</td>
                                                        <td>
                                                            {value.tgl}
                                                        </td>
                                                        <td>
                                                            {
                                                                value.status == 0 ? <p class="badge bg-danger">Hidden</p> : <p class="badge bg-success">Publish</p>
                                                            }
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" onclick="edit('{{$row->id}}')" class="btn btn-primary">Edit Status</a>
                                                            <a onclick="return confirm('Apa Anda Yakin??')" href="{{url('/admin/galery/hapus')}}/{{$row->id}}" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                })
                                            }
                                        </tbody>
                                    </table>
                                    <nav class="d-flex justify-content-between mt-4" aria-label="Page navigation">
                                        {/* {{ $galery-> links()}} */}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
            </div >
            <SwitcherBody />
        </>
    )
}

export default Index