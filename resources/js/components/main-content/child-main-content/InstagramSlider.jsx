import React from 'react'
import img30 from '../../../../../public/images/img30.jpg'
import img31 from '../../../../../public/images/img31.jpg'
import img32 from '../../../../../public/images/img32.jpg'
import img33 from '../../../../../public/images/img33.jpg'
import img34 from '../../../../../public/images/img34.jpg'
import img35 from '../../../../../public/images/img35.jpg'
import img36 from '../../../../../public/images/img36.jpg'
import { Card } from 'react-bootstrap'

const InstagramSlider = () => {
    return (
        <>
            <div className="instagram-slider version-ii container-fluid">
                <div className="row">
                    <div className="mask">
                        <div className="slideset">
                            <div className="slide">
                                <a href="#"><Card.Img src={img30} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img31} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img35} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img32} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img33} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img36} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img34} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img30} alt="image description" /></a>
                            </div>
                            <div className="slide">
                                <a href="#"><Card.Img src={img31} alt="image description" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default InstagramSlider