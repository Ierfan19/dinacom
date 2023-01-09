import React from 'react'
import img11 from '../../../../../public/images/img11.jpg'
import textJhonAston from '../../../../../public/images/text-jhon-aston.png'
import img22 from '../../../../../public/images/img22.jpg'
import img23 from '../../../../../public/images/img23.jpg'
import img70 from '../../../../../public/images/img70.jpg'
import img25 from '../../../../../public/images/img25.jpg'
import img69 from '../../../../../public/images/img69.jpg'
import img26 from '../../../../../public/images/img26.jpg'
import img27 from '../../../../../public/images/img27.jpg'
import img28 from '../../../../../public/images/img28.jpg'
import img29 from '../../../../../public/images/img29.jpg'
import adPlaceholder from '../../../../../public/images/ad-placeholder.jpg'
import { Card } from 'react-bootstrap'
import { Link } from '@inertiajs/inertia-react'

const Posts = ({ wisata }) => {
    return (
        <>
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
                    <section className="posts-blocks">
                        {
                            wisata.map((value, i) => {
                                return <article className="post-block wow fadeInUp" data-wow-delay="0.6s" key={i}>
                                    <div className="post-holder">
                                        <Link href={'/wisata/' + value.nama} >
                                            <div className="img-holder">
                                                <Card.Img src={value.gambar} alt={value.nama} />
                                            </div>
                                            <time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                            <h2>{value.nama}</h2>
                                            <p>{value.deskripsi}</p>
                                            <p className="read-more">Read more</p>
                                        </Link>
                                        <footer>
                                            <strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                            <strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
                                        </footer>
                                    </div>
                                </article>
                            })
                        }
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
        </>
    )
}

export default Posts