import React from 'react'
import { Link } from '@inertiajs/inertia-react'
import { Inertia } from '@inertiajs/inertia'
import $ from 'jquery'
import Menu from '../../Layouts/Menu'
import SwitcherBody from '../../Layouts/SwitcherBody'

const Index = ({ paginate, produk }) => {

    const edit = (id) => {
        $.get("/admin/produk/edit/" + id, {}, function (data, status) {
            $('#judul').html('Edit Status');
            $('#page').html(data);
            $('#produk').modal("show")
        });
    }

    const hapus = (id) => {
        if (window.confirm('Apakah Yakin Akan Menghapus')) {
            return Inertia.get(`/admin/produk/hapus/${id}`)
        } else {
            return false
        }
    }
    return (
        <>
            <Menu />
            <div className='wrapper'>
                <div className="page-content-wrapper">
                    <div className="page-content">
                        <div className="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div className="breadcrumb-title pe-3">Tables</div>
                            <div className="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol className="breadcrumb mb-0 p-0 align-items-center">
                                        <li className="breadcrumb-item"><a href="#">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                        </li>
                                        <li className="breadcrumb-item active" aria-current="page">Produk</li>
                                    </ol>
                                </nav>
                            </div>
                            <div className="ms-auto">
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-12 mx-auto">
                                <h6 className="mb-0 text-uppercase">Produk</h6>
                                <hr />
                                <div className="card">
                                    <div className="d-flex flex-wrap">
                                        <form action="{{url('/admin/produk')}}" method="get">
                                            <div className="d-flex align-items-center flex-nowrap">
                                                <p className="mb-0 font-13 text-nowrap">Show:</p>
                                                <select className="form-control ms-2" name="paginate" >
                                                    {
                                                        paginate == 10 ? <>
                                                            <option defaultValue="10" selected>10</option>
                                                            <option defaultValue="25" >25</option>
                                                            <option defaultValue="50">50</option>
                                                            <option defaultValue="100">100</option>
                                                        </> : (
                                                            paginate == 25 ? <>
                                                                <option defaultValue="10">10</option>
                                                                <option defaultValue="25" selected>25</option>
                                                                <option defaultValue="50">50</option>
                                                                <option defaultValue="100">100</option>
                                                            </> : (
                                                                paginate == 50 ? <>
                                                                    <option defaultValue="10">10</option>
                                                                    <option defaultValue="25" >25</option>
                                                                    <option defaultValue="50" selected>50</option>
                                                                    <option defaultValue="100">100</option>
                                                                </> : (
                                                                    <>
                                                                        <option defaultValue="10">10</option>
                                                                        <option defaultValue="25" >25</option>
                                                                        <option defaultValue="50" >50</option>
                                                                        <option defaultValue="100" selected>100</option>
                                                                    </>
                                                                )
                                                            )
                                                        )
                                                    }
                                                </select>
                                                <div className="mx-2"></div>
                                                <button type="submit" className="me-3 btn btn-info  text-white">
                                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                                </button>
                                                <input type="text" name="cari" className="form-control" placeholder="Cari Wisata....." />
                                                <div className="col-sm-2 ms-2"><button type="submit" className="me-3 btn btn-info"><i className="bi bi-search"></i></button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div className="d-flex col-sm-4">

                                    </div>
                                </div>
                            </div>
                        </div >
                        <div className="card radius-10">
                            <div className="card-body">
                                <div className="d-flex align-items-center">
                                    <h6 className="mb-0">Recent Orders</h6>
                                    <div className="fs-5 ms-auto dropdown">
                                        <div className="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                                            <div className="fs-5 ms-auto">
                                                <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                            </div>
                                        </div>
                                        <ul className="dropdown-menu">
                                            <li><a className="dropdown-item" href="#">Action</a></li>
                                            <li><a className="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr className="dropdown-divider" />
                                            </li>
                                            <li><a className="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="table-responsive mt-2">
                                    <table className="table align-middle mb-0">
                                        <thead className="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">No Telp</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            {
                                                produk.data.map((value, i) => {
                                                    return <tr key={i}>
                                                        <td>{i + 1}</td>
                                                        <td>
                                                            <div className="d-flex align-items-center gap-3">
                                                                <div className="product-box border">
                                                                    <img src={value.gambar} alt={value.nama} />
                                                                </div>
                                                                <div className="product-info">
                                                                    <h6 className="product-name mb-1">{value.nama}</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{value.contact}</td>
                                                        <td>
                                                            {
                                                                value.status == 0 ? <span className="badge alert-danger">Hidden</span> : <span className="badge alert-success">Publish</span>
                                                            }
                                                        </td>
                                                        <td>
                                                            <div className="d-flex align-items-center gap-3 fs-6">
                                                                <a className="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views">
                                                                    <ion-icon name="eye-sharp"></ion-icon>
                                                                </a>
                                                                <button type='button' onClick={() => edit(value.id)} className="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">
                                                                    <ion-icon name="pencil-sharp"></ion-icon>
                                                                </button>
                                                                <button type='button' onClick={() => hapus(value.id)} className="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete">
                                                                    <ion-icon name="trash-sharp"></ion-icon>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                })
                                            }
                                        </tbody>
                                    </table>
                                    <nav className="d-flex justify-content-between mt-4" aria-label="Page navigation">
                                        {/* {{$produk->links()}} */}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div >

                </div>
            </div>
            <SwitcherBody />
            <div className="modal fade" id="produk" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title" id="judul"></h5>
                            <i className="bi bi-x-lg" style={{ fontSize: '20px' }} data-bs-dismiss="modal" aria-label="Close"></i>
                            {/* <!-- <button type="button" className="btn-close"></button> --> */}
                        </div>
                        <div className="modal-body">
                            <div id="page"></div>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Index