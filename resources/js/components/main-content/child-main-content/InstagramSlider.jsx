import React from 'react'
import img30 from '../../../../../public/images/img30.jpg'
import img31 from '../../../../../public/images/img31.jpg'
import img32 from '../../../../../public/images/img32.jpg'
import img33 from '../../../../../public/images/img33.jpg'
import img34 from '../../../../../public/images/img34.jpg'
import img35 from '../../../../../public/images/img35.jpg'
import img36 from '../../../../../public/images/img36.jpg'
import { Card } from 'react-bootstrap'

const InstagramSlider = ({ wisata }) => {
    return (
        <>
            <div className="instagram-slider version-ii container-fluid">
                <div className="row">
                    <div className="mask">
                        <div className="slideset">
                            {
                                wisata.map((value, i) => {
                                    return <div className="slide" key={i}>
                                        <Card.Img src={value.gambar} alt={value.nama} />
                                    </div>
                                })
                            }
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default InstagramSlider