import React from 'react'

const Edit = ({ produk }) => {
    return (
        <>
            <form action="{{url('/admin/produk/update')}}" method="post">
                <input type="hidden" name="id" defaultValue={produk.id} />
                <div className="d-flex mb-2">
                    <input type="radio" style={{ width: '20px', marginRight: '10px' }} name="status" id="1" defaultValue="1" /> <label className="ms-2" for="1">Tampilkan</label>
                </div>
                <div className="d-flex mb-2">
                    <input type="radio" style={{ width: '20px', marginRight: '10px' }} name="status" id="0" defaultValue="0" /> <label className="ms-2" for="0">Sembunyikan</label>
                </div>
                <button className="btn btn-primary mt-3" type="submit">Edit</button>
            </form>
        </>
    )
}

export default Edit