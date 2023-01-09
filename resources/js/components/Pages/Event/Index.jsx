import React from 'react'
import { Card } from 'react-bootstrap'
import Header from '../../Header/Header'
import BodyFooter from '../../main-content/child-main-content/BodyFooter'
import Footer from '../../Footer/Footer'
import { Link } from '@inertiajs/inertia-react'
import img30 from '../../../../../public/images/img30.jpg'

const Index = () => {
    return (
        <>
            <div id="wrapper">
                <div class="w1">
                    <Header />
                    <main id="main" role="main">
                        <div id="twocolumns" class="container">
                            <div class="row">
                                <div id="content" class="col-xs-12">
                                    <div class="widget widget_search hidden-md hidden-lg">
                                        <form method="get" class="search-form" action="#">
                                            <fieldset>
                                                <input type="search" name="s" placeholder="Type to search here" />
                                                <button type="button" class="ico-search"></button>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <section class="posts-blocks fullwidth">
                                        {/* {
											products.map((value, i) => {
												return <article class="post-block wow fadeInUp" data-wow-delay="0.6s" key={i}>
													<div class="post-holder">
														<Link href={'/product/' + value.nama} >
															<div class="img-holder">
																<Card.Img src={value.gambar} alt={value.nama} />
															</div>
															<time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
															<h2>{value.nama}</h2>
															<p>{value.deskripsi}</p>
															<p class="read-more">Read more</p>
														</Link>
														<footer>
															<strong class="text comment-count"><span class="icon ico-comment"></span><a href="#">25 comments</a></strong>
															<strong class="text share-count"><span class="icon ico-share"></span><a href="#">138 shares</a></strong>
														</footer>
													</div>
												</article>
											})
										} */}
                                        <article class="post-block wow fadeInUp" data-wow-delay="0.6s" >
                                            <div class="post-holder">
                                                <Link href={'/wisata/sadad'} >
                                                    <div class="img-holder">
                                                        <Card.Img src={img30} alt='sdad' />
                                                    </div>
                                                    <time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
                                                    <h2>asdsad</h2>
                                                    <p>asdsdad</p>
                                                    <p class="read-more">Read more</p>
                                                </Link>
                                                <footer>
                                                    <strong class="text comment-count"><span class="icon ico-comment"></span><a href="#">25 comments</a></strong>
                                                    <strong class="text share-count"><span class="icon ico-share"></span><a href="#">138 shares</a></strong>
                                                </footer>
                                            </div>
                                        </article>
                                    </section>
                                    <nav role="navigation" class="navigation pagination">
                                        <div class="nav-links text-center">
                                            <a href="#" class="prev page-numbers">Prev post.</a>
                                            <a href="#" class="page-numbers">1</a>
                                            <span class="page-numbers current">2</span>
                                            <span class="page-numbers dots hidden">…</span>
                                            <a href="#" class="page-numbers">3</a>
                                            <a href="#" class="next page-numbers">NEXT post.</a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="instagram-slider version-ii container-fluid">
                            <div class="row">
                                <div class="mask">
                                    {/* <div class="slideset">
                                        {
                                            products.map((value, i) => {
                                                return <div class="slide" key={i}>
                                                    <Card.Img src={value.gambar} alt={value.nama} />
                                                </div>
                                            })
                                        }
                                    </div> */}
                                </div>
                            </div>
                        </div>
                    </main>
                    <BodyFooter />
                    <Footer />
                    <span id="back-top" class="fa fa-angle-up"></span>
                </div>
            </div>
        </>
    )
}

export default Index