import React from 'react'
import { Card } from 'react-bootstrap';
import img19 from '../../../../public/images/img19.jpg'
import img20 from '../../../../public/images/img20.jpg'
import img21 from '../../../../public/images/img21.jpg'
import img22 from '../../../../public/images/img22.jpg'
import img23 from '../../../../public/images/img23.jpg'
import img25 from '../../../../public/images/img25.jpg'
import img26 from '../../../../public/images/img26.jpg'
import img11 from '../../../../public/images/img11.jpg'
import img70 from '../../../../public/images/img70.jpg'
import img69 from '../../../../public/images/img69.jpg'
import img27 from '../../../../public/images/img27.jpg'
import img28 from '../../../../public/images/img28.jpg'
import img29 from '../../../../public/images/img29.jpg'
import img30 from '../../../../public/images/img30.jpg'
import img31 from '../../../../public/images/img31.jpg'
import img32 from '../../../../public/images/img32.jpg'
import img33 from '../../../../public/images/img33.jpg'
import img34 from '../../../../public/images/img34.jpg'
import img35 from '../../../../public/images/img35.jpg'
import img36 from '../../../../public/images/img36.jpg'
import textJhonAston from '../../../../public/images/text-jhon-aston.png'
import styleChanger from '../../../../public/inc/style-changer.html'
import adPlaceholder from '../../../../public/images/ad-placeholder.jpg'
import logo2 from '../../../../public/images/logo2.png'
import Header from '../Header/Header'
import Footer from '../Footer/Footer'

const main = () => {
    return (
        <>
            <div className="version-ii">
                <div className="loader-holder">
                    <div className="loader">
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                        <div className="side"></div>
                    </div>
                </div>
                <div id="wrapper">
                    <div className="w1">
                        <Header />
                        <main id="main" role="main">
                            <section className="posts-slider">
                                <div className="container">
                                    <div className="row">
                                        <div className="center-slider mask">
                                            <article className="slide">
                                                <div className="slide-holder">
                                                    <div className="img-holder">
                                                        <Card.Img src={img19} alt="image description" />
                                                    </div>
                                                    <h2><a href="single-post.html">I get up in the morning looking for an adventure.</a></h2>
                                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                                </div>
                                            </article>
                                            <article className="slide">
                                                <div className="slide-holder">
                                                    <div className="img-holder">
                                                        <Card.Img src={img20} alt="image description" />
                                                    </div>
                                                    <h2><a href="single-post.html">Traveling is awesome if you can enjoy.</a></h2>
                                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                                </div>
                                            </article>
                                            <article className="slide">
                                                <div className="slide-holder">
                                                    <div className="img-holder">
                                                        <Card.Img src={img21} alt="image description" />
                                                    </div>
                                                    <h2><a href="single-post.html">Just think about a world tour to get relax.</a></h2>
                                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                                </div>
                                            </article>
                                            <article className="slide">
                                                <div className="slide-holder">
                                                    <div className="img-holder">
                                                        <Card.Img src={img19} alt="image description" />
                                                    </div>
                                                    <h2><a href="single-post.html">The Pros And Cons Of Travelling By Bicycle.</a></h2>
                                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                                </div>
                                            </article>
                                            <article className="slide">
                                                <div className="slide-holder">
                                                    <div className="img-holder">
                                                        <Card.Img src={img20} alt="image description" />
                                                    </div>
                                                    <h2><a href="single-post.html">Letter from the desk of an unsuccessful designer</a></h2>
                                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div id="twocolumns" className="container" >
                                <div className="row">
                                    <div id="content" className="col-xs-12 col-md-8 pull-right">
                                        <div className="widget widget_search hidden-md hidden-lg">
                                            <form method="get" className="search-form" action="#">
                                                <fieldset>
                                                    <input type="search" name="s" placeholder="Type to search here" />
                                                    <button type="button" className="ico-search"></button>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <section className="widget profile-widget version-ii hidden-lg hidden-md">
                                            <div className="profile-pic">
                                                <a href="#">
                                                    <Card.Img src={img11} alt="John Aston" />
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="#">
                                                    <Card.Img src={textJhonAston} alt="jhon aston" />
                                                </a>
                                            </h3>
                                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                                            <ul className="social-networks">
                                                <li><a href="#"><span className="icon ico-facebook"></span></a></li>
                                                <li><a href="#"><span className="icon ico-twitter"></span></a></li>
                                                <li><a href="#"><span className="icon ico-google-plus"></span></a></li>
                                                <li><a href="#"><span className="icon ico-linkedin"></span></a></li>
                                                <li><a href="#"><span className="icon ico-pinterest"></span></a></li>
                                            </ul>
                                        </section>
                                        <section className="posts-blocks">
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="img-holder">
                                                        <a href="single-post.html"><Card.Img src={img22} alt="image description" /></a>
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">I get up in the morning looking for adventure.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="img-holder">
                                                        <a href="single-post.html"><Card.Img src={img23} alt="image description" /></a>
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">Traveling is awesome <br />if you can enjoy.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="video-holder">
                                                        <a href="https://player.vimeo.com/video/133306855" className="ico-play lightbox fancybox.iframe"></a>
                                                        <Card.Img src={img70} alt="image description" />
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">I get up in the morning looking for adventure.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="img-holder">
                                                        <a href="single-post.html"><Card.Img src={img69} alt="image description" /></a>
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">Traveling is awesome <br />if you can enjoy.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="img-holder">
                                                        <a href="single-post.html"><Card.Img src={img25} alt="image description" /></a>
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">I get up in the morning looking for adventure.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                            <article className="post-block wow fadeInUp" data-wow-delay="0.6s">
                                                <div className="post-holder">
                                                    <div className="img-holder">
                                                        <a href="single-post.html"><Card.Img src={img26} alt="image description" /></a>
                                                    </div>
                                                    <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2><a href="single-post.html">Traveling is awesome <br />if you can enjoy.</a></h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscin elit, sed diam nonummy nibh euismod tincidunt...</p>
                                                    <a href="single-post.html" className="read-more">Read more</a>
                                                    <footer>
                                                        <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                        <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                    </footer>
                                                </div>
                                            </article>
                                        </section>
                                        <nav role="navigation" className="navigation pagination">
                                            <div className="nav-links">
                                                <a href="#" className="prev page-numbers">Prev post.</a>
                                                <a href="#" className="page-numbers">1</a>
                                                <span className="page-numbers current">2</span>
                                                <span className="page-numbers dots hidden">…</span>
                                                <a href="#" className="page-numbers">3</a>
                                                <a href="#" className="next page-numbers">NEXT post.</a>
                                            </div>
                                        </nav>
                                    </div>
                                    <aside id="sidebar" className="col-xs-12 col-md-4 pull-left">
                                        <section className="widget profile-widget version-ii hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
                                            <div className="profile-pic">
                                                <a href="#">
                                                    <Card.Img src={img11} alt="John Aston" />
                                                </a>
                                            </div>
                                            <h3><a href="#"><Card.Img src={img11} alt="jhon aston" /></a></h3>
                                            <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                                            <ul className="social-networks">
                                                <li><a href="#"><span className="icon ico-facebook"></span></a></li>
                                                <li><a href="#"><span className="icon ico-twitter"></span></a></li>
                                                <li><a href="#"><span className="icon ico-google-plus"></span></a></li>
                                                <li><a href="#"><span className="icon ico-linkedin"></span></a></li>
                                                <li><a href="#"><span className="icon ico-pinterest"></span></a></li>
                                            </ul>
                                        </section>
                                        <div className="widget widget_search hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
                                            <form method="get" className="search-form" action="#">
                                                <fieldset>
                                                    <input type="search" name="s" placeholder="Type to search here" />
                                                    <button type="button" className="ico-search"></button>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <section className="widget recent-posts-widget version-ii wow fadeInUp" data-wow-delay="0.6s">
                                            <header className="tab-head">
                                                <h3><a className="active" href="#tab1">Recent Posts</a></h3>
                                                <h3><a href="#tab2">Popular Posts</a></h3>
                                            </header>
                                            <div className="tab-content">
                                                <div id="tab1">
                                                    <ul>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img27} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">Traveling is awesome if you <br />can enjoy.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img28} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">I get up in the morning looking <br />for an adventure.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img29} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">Holiday is awesome when loved <br />one beside me.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="tab2">
                                                    <ul>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img29} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">Holiday is awesome when loved <br />one beside me.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img27} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">Traveling is awesome if you <br />can enjoy.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div className="alignleft">
                                                                <Card.Img src={img28} alt="image description" />
                                                            </div>
                                                            <div className="descr">
                                                                <h4><a href="single-post.html">I get up in the morning looking <br />for an adventure.</a></h4>
                                                                <span className="post-tag">
                                                                    <time dateTime="2011-01-12"><a href="#">25th may</a></time>
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <div className="widget promo-widget wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="#"><Card.Img src={adPlaceholder} alt="“Place your Advertisement here”" /></a>
                                        </div>
                                        <div className="widget widget_categories version-ii wow fadeInUp" data-wow-delay="0.6s">
                                            <header className="widget-head">
                                                <h3>Category</h3>
                                            </header>
                                            <ul>
                                                <li className="cat-item cat-item-1"><span><a href="#">- Lifestyle</a></span><span><a href="#">- Lifestyle</a></span></li>
                                                <li className="cat-item cat-item-1"><span><a href="#">- Movie</a></span><span><a href="#">- Movie</a></span></li>
                                                <li className="cat-item cat-item-1"><span><a href="#">- Travel</a></span><span><a href="#">- Travel</a></span></li>
                                                <li className="cat-item cat-item-1"><span><a href="#">- Sports</a></span><span><a href="#">- Sports</a></span></li>
                                                <li className="cat-item cat-item-1"><span><a href="#">- Music</a></span><span><a href="#">- Music</a></span></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </div>
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
                        </main>
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
                        <Footer />
                        <span id="back-top" className="fa fa-angle-up"></span>
                        <div id="style-changer" data-src={styleChanger}></div>
                    </div>
                </div >
            </div >
        </>
    )
}

export default main