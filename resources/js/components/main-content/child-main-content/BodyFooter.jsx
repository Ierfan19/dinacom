import React from 'react'
import logo2 from '../../../../../public/images/logo2.png'
import { Card } from 'react-bootstrap'

const BodyFooter = () => {
    return (
        <>
            <aside className="aside version-ii container">
                <div className="row">
                    <div className="col-xs-12 holder">
                        <div className="col">
                            <div className="logo"><a href="#"><Card.Img src={logo2} alt="dot" /></a></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            <ul className="social-networks">
                                <li><a href="#"><span className="ico-facebook"></span></a></li>
                                <li><a href="#"><span className="ico-twitter"></span></a></li>
                                <li><a href="#"><span className="ico-google-plus"></span></a></li>
                                <li><a href="#"><span className="ico-linkedin"></span></a></li>
                                <li><a href="#"><span className="ico-pinterest"></span></a></li>
                            </ul>
                        </div>
                        <nav className="col footer-nav">
                            <h3>Important Links</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </nav>
                        <nav className="col footer-nav">
                            <h3>Popular Links</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </nav>
                        <div className="col">
                            <h3>Subscribe to Newsletter</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
                            <form action="#" className="subscribe-form">
                                <div className="form-group">
                                    <input type="email" className="form-control" placeholder="Enter your email here" />
                                    <button type="button" className="ico-send"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </aside>
        </>
    )
}

export default BodyFooter