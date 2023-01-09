import React from 'react'
import logo2 from '../../../../public/images/logo2.png'
import img11 from '../../../../public/images/img11.jpg'
import { Card } from 'react-bootstrap'
import { Link } from '@inertiajs/inertia-react'

const Header = () => {
    return (
        <>
            <header id="header" className="version-ii">
                <div className="container">
                    <div className="row top-bar">
                        <nav className="col-xs-12 col-sm-6 policy-nav">
                            <ul>
                                <li><a href="#">sitemap</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">support</a></li>
                            </ul>
                        </nav>
                        <div className="col-xs-12 col-sm-6 pull-right hidden-xs">
                            <ul className="social-networks">
                                <li><a href="#"><span className="ico-facebook"></span></a></li>
                                <li><a href="#"><span className="ico-twitter"></span></a></li>
                                <li><a href="#"><span className="ico-google-plus"></span></a></li>
                                <li><a href="#"><span className="ico-linkedin"></span></a></li>
                                <li><a href="#"><span className="ico-pinterest"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div className="stick-holder">
                    <div className="container">
                        <div className="row holder">
                            <div className="col-xs-3 col-sm-2">
                                <div className="logo"><Link href='/'><Card.Img src={logo2} alt="dot" /></Link></div>
                                <Link href='/' >Home</Link><br />
                                <Link href='/contact-us' >Contact Us</Link><br />
                                <Link href='/products' >Products</Link><br />
                                <Link href='/events' >Events</Link>
                            </div>
                            <div className="col-xs-9 col-sm-10 nav-holder">
                                <nav id="nav" className="navbar navbar-default">
                                    <div className="navbar-header">
                                        <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span className="sr-only">Toggle navigation</span>
                                            <span className="icon-bar"></span>
                                            <span className="icon-bar"></span>
                                            <span className="icon-bar"></span>
                                        </button>
                                    </div>
                                    <a href="#" className="pull-right icon-menu"><span className="ico-menu"></span></a>
                                    <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul className="nav navbar-nav navbar-right">
                                            <li className="active" data-drop="drop-right">
                                                <a href="home.html">Home</a>
                                                <div className="drop">
                                                    <ul>
                                                        <li>
                                                            <a href="home.html">Home-V1</a>
                                                            <div className="drop">
                                                                <ul>
                                                                    <li><a href="home-leftsidebar.html">left sidebar</a></li>
                                                                    <li><a href="home-nosidebar.html">No sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="home-v2.html">Home-V2</a>
                                                            <div className="drop">
                                                                <ul>
                                                                    <li><a href="home-v2-rightsidebar.html">Right sidebar</a></li>
                                                                    <li><a href="home-v2-nosidebar.html">No sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="home-v3.html">Home-V3</a>
                                                            <div className="drop">
                                                                <ul>
                                                                    <li><a href="home-v3-leftsidebar.html">left sidebar</a></li>
                                                                    <li><a href="home-v3-rightsidebar.html">right sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li data-drop="drop-right">
                                                <a href="single-post.html">blog</a>
                                                <div className="drop">
                                                    <ul>
                                                        <li>
                                                            <a href="single-post.html">detail-v1</a>
                                                            <div className="drop">
                                                                <ul>
                                                                    <li><a href="post-left-sidebar-v1.html">left sidebar</a></li>
                                                                    <li><a href="post-detail-nosidebar.html">nosidebar</a></li>
                                                                    <li><a href="post-detail-audio-v1.html">post detail audio</a></li>
                                                                    <li><a href="post-detail-slider-v1.html">post detail slider</a></li>
                                                                    <li><a href="post-detail-video-v1.html">post detail video</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="single-postv2.html">detail-v2</a>
                                                            <div className="drop">
                                                                <ul>
                                                                    <li><a href="post-left-sidebar-v2.html">left sidebar</a></li>
                                                                    <li><a href="right-sidebar-v2.html">right sidebar</a></li>
                                                                    <li><a href="post-detail-audio-v2.html">post detail audio</a></li>
                                                                    <li><a href="post-detail-slider-v2.html">post detail slider</a></li>
                                                                    <li><a href="post-detail-video-v2.html">post detail video</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li data-drop="drop-right"><a href="archive.html">archive</a></li>
                                            <li>
                                                <a href="#">Pages</a>
                                                <div className="drop">
                                                    <ul>
                                                        <li><a href="404-error.html">404 error</a></li>
                                                        <li><a href="coming-soon.html">coming soon</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Shortcodes</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <nav className="side-nav">
                    <a href="#" className="close"><i className="fa fa-times"></i></a>
                    <h2>About me</h2>
                    <section className="widget profile-widget">
                        <div className="profile-pic">
                            <a href="#">
                                <Card.Img src={img11} alt="John Aston" />
                            </a>
                        </div>
                        <h3><a href="#">John Aston</a></h3>
                        <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                        <ul className="social-networks">
                            <li><a href="#"><span className="icon ico-facebook"></span></a></li>
                            <li><a href="#"><span className="icon ico-twitter"></span></a></li>
                            <li><a href="#"><span className="icon ico-google-plus"></span></a></li>
                            <li><a href="#"><span className="icon ico-linkedin"></span></a></li>
                            <li><a href="#"><span className="icon ico-pinterest"></span></a></li>
                        </ul>
                    </section>
                </nav>
            </header>
        </>
    )
}

export default Header