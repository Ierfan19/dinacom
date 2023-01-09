import { useState, useEffect } from 'react'
import { Inertia } from '@inertiajs/inertia'
import Menu from '../../Layouts/Menu'
import SwitcherBody from '../../Layouts/SwitcherBody'

const Edit = ({ wisata }) => {
    const [nama, setNama] = useState('')
    const [alamat, setAlamat] = useState('')
    const [gambar, setGambar] = useState('')
    const [deskripsi, setDeskripsi] = useState('')
    const [preview, setPreview] = useState('')

    const changeImg = (e) => {
        const image = e.target.files[0]
        setGambar(image)
        setPreview(URL.createObjectURL(image))
    }

    const handleSubmit = (e) => {
        e.preventDefault()

        Inertia.post('/admin/wisata/edit', {
            nama, alamat, gambar, deskripsi
        }, {
            forceFormData: true,
        })
    }

    useEffect(() => {
        setPreview(wisata.gambar)
    }, [])
    return (
        <>
            <Menu />
            <div className='wrapper'>
                <div className="page-content-wrapper">
                    <div className="page-content">
                        <div className="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            <div className="breadcrumb-title pe-3">Forms</div>
                            <div className="ps-3">
                                <nav aria-label="breadcrumb">
                                    <ol className="breadcrumb mb-0 p-0 align-items-center">
                                        <li className="breadcrumb-item"><a href="#">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                        </li>
                                        <li className="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
                        <div className="row">
                            <div className="col-xl-12 mx-auto">
                                <div className="card">
                                    <div className="card-body">
                                        <div className="border p-3 rounded">
                                            <h6 className="mb-0 text-uppercase">Edit Wisata</h6>
                                            <hr />
                                            <form className="row g-3" onSubmit={handleSubmit}>
                                                <div className="col-12">
                                                    <input type="hidden" name="id" id="id" defaultValue={wisata.id} />
                                                    <label className="form-label">Nama Wisata</label>
                                                    <input name="nama" defaultValue={wisata.nama} onChange={(e) => setNama(e.target.value)} type="text" className="form-control" />
                                                </div>
                                                <div className="col-12">
                                                    <label className="form-label">Deskripsi Wisata</label>
                                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" onChange={(e) => setDeskripsi(e.target.value)}>{wisata.deskripsi}</textarea>
                                                </div>

                                                <div className="col-12">
                                                    <label className="form-label">Alamat Wisata</label>
                                                    <input name="alamat" defaultValue={wisata.alamat} onChange={(e) => setAlamat(e.target.value)} type="text" className="form-control" />
                                                </div>
                                                <div className="form-group">
                                                    <label className="form-label" htmlFor="gambar">Gambar</label>
                                                    <input className="form-control" id="gambar" onChange={changeImg} type="file" name="gambar" />
                                                    <img src={preview} alt="" width="200" id="showimg" />
                                                </div>
                                                <div className="col-12">
                                                    <div className="d-grid">
                                                        <button type="submit" className="btn btn-primary">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

export default Edit