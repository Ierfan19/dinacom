import { useState } from 'react'
import { Card } from 'react-bootstrap'
import { Link } from '@inertiajs/inertia-react'
import { Inertia } from '@inertiajs/inertia'
import Menu from '../../Layouts/Menu'
import SwitcherBody from '../../Layouts/SwitcherBody'

const Index = ({ paginate, wisata }) => {
    // const [valuePaginate, setValuePaginate] = useState('')
    const [valueCari, setValueCari] = useState('')

    const handleSubmit = (e) => {
        e.preventDefault()
        Inertia.get('/admin/wisata')
    }
    return (
        <>
            <Menu />
            <div className='wrapper'>
                <div className="page-content-wrapper">
                    <div className="page-content">
                        <div className="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div className="breadcrumb-title pe-3">eCommerce</div>
                            <div className="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol className="breadcrumb mb-0 p-0 align-items-center">
                                        <li className="breadcrumb-item"><a href="#">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                        </li>
                                        <li className="breadcrumb-item active" aria-current="page">List View</li>
                                    </ol>
                                </nav>
                            </div>
                            <div className="ms-auto">
                                <div className="btn-group">
                                    <button type="button" className="btn btn-outline-primary">Settings</button>
                                    <button type="button" className="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span className="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div className="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a className="dropdown-item" href="#">Action</a>
                                        <a className="dropdown-item" href="#">Another action</a>
                                        <a className="dropdown-item" href="#">Something else here</a>
                                        <div className="dropdown-divider"></div> <a className="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section className="shop-page">
                            <div className="shop-container">
                                <div className="card shadow-sm border-0">
                                    <div className="card-body">
                                        <div className="row">
                                            <div className="col-12">
                                                <div className="card">
                                                    <div className="card-body">
                                                        <div className="toolbox d-flex flex-row align-items-center gap-2">
                                                            <div className="d-flex flex-wrap flex-grow-1 gap-1">
                                                            </div>
                                                            <div className="d-flex flex-wrap">
                                                                <div className="d-flex align-items-center flex-nowrap">
                                                                    <Link href='/admin/wisata/create' className="btn btn-success">Tambah</Link>
                                                                </div>
                                                            </div>
                                                            <form onSubmit={(e) => handleSubmit(e)}>
                                                                <div className="d-flex flex-wrap">
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
                                                                    </div>
                                                                </div>
                                                                <div className="btn-group">
                                                                    <div className="d-flex col-sm-12">
                                                                        <input type="text" defaultValue={valueCari} onChange={(e) => setValueCari(e.target.value)} name="cari" className="form-control" placeholder="Cari Wisata....." />
                                                                        <div className="col-sm-2"><button type="submit" className="me-3 btn btn-info"><i className="bi bi-search"></i></button></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-wrapper">
                                                <div className="card">
                                                    <div className="card-body">
                                                        <div className="position-relative">
                                                            <input type="text" className="form-control ps-5" placeholder="Search Product..." />
                                                            <span className="position-absolute top-50 product-show translate-middle-y">
                                                                <ion-icon name="search-sharp" className="ms-3 fs-6"></ion-icon>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="product-grid">
                                                    {
                                                        wisata.data.map((value, i) => {
                                                            return <>
                                                                <div className="card product-card" key={i}>
                                                                    <div className="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
                                                                        {/*  <a href="#">
                                            <div className="product-wishlist"> <i className="bx bx-heart"></i>
                                            </div>
                                        </a> */}
                                                                    </div>
                                                                    <div className="row g-0">
                                                                        <div className="col-md-4">
                                                                            <div className="p-3">
                                                                                <Card.Img
                                                                                    src={value.gambar}
                                                                                    style={{ maxWidth: '200px', objectFit: 'cover', height: '200px' }}
                                                                                    className="img-fluid" alt={value.nama} />
                                                                            </div>
                                                                        </div>
                                                                        <div className="col-md-8">
                                                                            <div className="card-body">
                                                                                <div className="product-info">
                                                                                    <a href="#">
                                                                                        {/* <p className="product-catergory font-13 mb-1">{{$row->nama}}</p> */}
                                                                                    </a>
                                                                                    <a href="ecommerce-product-details.html">
                                                                                        {/* <h6 className="product-name mb-2">{{$row->nama}}</h6> */}
                                                                                    </a>
                                                                                    {/* <p className="card-text">{{$row->nama}}.</p> */}
                                                                                    <div className="d-flex align-items-center">
                                                                                        {/* <div className="mb-1 product-price"> <span className="me-1 text-decoration-line-through">$99.00</span>
                                                            <span className="fs-5">$49.00</span>
                                                        </div> */}
                                                                                    </div>
                                                                                    <div className="product-action mt-2">
                                                                                        <div className="d-flex gap-2">
                                                                                            <a href="#" className="btn btn-primary btn-ecomm"> <i className="bx bxs-cart-add"></i>Detail</a>
                                                                                            <Link href={'/admin/wisata/edit/' + value.id} className="btn btn-light btn-ecomm">
                                                                                                <i className='bx bx-pen'></i>Edit</Link>
                                                                                            <Link href={'/admin/wisata/hapus/' + value.id} className="btn btn-danger">
                                                                                                <i className='bx bx-trash'></i>Hapus</Link>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </>
                                                        })
                                                    }
                                                </div>
                                                <hr />
                                                <nav className="d-flex justify-content-between" aria-label="Page navigation">
                                                    {/* {{$wisata->links()}} */}
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div >
                    <div className="modal fade" id="wisata" tabIndex="-1" aria-labelledby="wisataLabel" aria-hidden="true">
                        <div className="modal-dialog">
                            <div className="modal-content">
                                <div className="modal-header">
                                    <h1 className="modal-title fs-5" id="wisataLabel">Modal title</h1>
                                    <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div className="modal-body">
                                    ...
                                </div>
                                <div className="modal-footer">
                                    <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" className="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <SwitcherBody />
        </>
    )
}

export default Index