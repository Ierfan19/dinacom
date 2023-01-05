import React from 'react'

const Footer = () => {
    return (
        <>
            <footer id="footer" className="container version-ii">
                <div className="row">
                    <div className="col-xs-12 col-sm-6">
                        <p>&copy; 2016 Copyright 2016, <a href="home.html">Dot</a>. All Rights Reserved</p>
                    </div>
                    <div className="col-xs-12 col-sm-6">
                        <ul className="social-networks">
                            <li><a href="#"><span className="ico-facebook"></span></a></li>
                            <li><a href="#"><span className="ico-twitter"></span></a></li>
                            <li><a href="#"><span className="ico-google-plus"></span></a></li>
                            <li><a href="#"><span className="ico-linkedin"></span></a></li>
                            <li><a href="#"><span className="ico-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </>
    )
}

export default Footer