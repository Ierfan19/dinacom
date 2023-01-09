import React from 'react'
import { Card } from 'react-bootstrap'
import img57 from '../../../../../../public/images/img57.jpg'
import img54 from '../../../../../../public/images/img54.jpg'
import img55 from '../../../../../../public/images/img55.jpg'
import img71 from '../../../../../../public/images/img71.jpg'
import img56 from '../../../../../../public/images/img56.jpg'
import img58 from '../../../../../../public/images/img58.jpg'
import img30 from '../../../../../../public/images/img30.jpg'
import img31 from '../../../../../../public/images/img31.jpg'
import img32 from '../../../../../../public/images/img32.jpg'
import img33 from '../../../../../../public/images/img33.jpg'
import Header from '../../../Header/Header'
import BodyFooter from '../../../main-content/child-main-content/BodyFooter'
import Footer from '../../../Footer/Footer'
import { Navigation, EffectFade, Autoplay } from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css/bundle'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/autoplay'

const Index = ({ product }) => {
	return (
		<>

			<div id="wrapper">
				<div className="w1">
					<Header />
					<main id="main" role="main">
						<div className="container">
							<div className="row">
								<article id="content" className="col-xs-12">
									<div className="post-block single-post wow fadeInUp" data-wow-delay="0.4s">
										<div className="post-holder">
											<div className="img-holder">
												<Card.Img src={product.gambar} alt="image description" />
											</div>
											<time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
											<h2>{product.nama}</h2>
											<p>{product.deskripsi}</p>
											{/* <blockquote>
												<p>Habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Anvesti nes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam dynamicus, qui sequitur mutationem</p>
											</blockquote> */}
											<footer>
												<strong className="text"><span className="icon ico-user"></span><a href="#">David Ramon</a></strong>
												<strong className="text comment-count"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
												<strong className="text"><span className="icon ico-tag"></span>Tag: <a href="#">travel.</a> <a href="#">life</a>, <a href="#">enjoy</a></strong>
												<strong className="text share-count"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
											</footer>
										</div>
									</div>
									<div className="widget widget-block wow fadeInUp" data-wow-delay="0.4s">
										<div className="alignleft">
											<a href="#"><Card.Img src={img54} alt="David Ramon" /></a>
										</div>
										<div className="text-holder">
											<header>
												<h2><a href="#">David Ramon</a></h2>
												<span className="subtitle"><a href="#">www.davidramon.com</a></span>
											</header>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.</p>
											<ul className="social-networks">
												<li><a href="#"><span className="ico-facebook"></span></a></li>
												<li><a href="#"><span className="ico-twitter"></span></a></li>
												<li><a href="#"><span className="ico-google-plus"></span></a></li>
												<li><a href="#"><span className="ico-linkedin"></span></a></li>
												<li><a href="#"><span className="ico-pinterest"></span></a></li>
											</ul>
										</div>
									</div>
									<section className="posts-blocks extra wow fadeInUp" data-wow-delay="0.4s">
										<header className="header">
											<h2>Related Posts</h2>
											<p>You may like these post too</p>
										</header>
										<div className="post-block single-post-block">
											<div className="post-holder">
												<div className="img-holder">
													<a href="single-postv2.html"><Card.Img alt="image description" src={img55} /></a>
												</div>
												<time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
												<h2><a href="#">Traveling is awesome if you can enjoy.</a></h2>
											</div>
										</div>
										<div className="post-block single-post-block">
											<div className="post-holder">
												<div className="img-holder">
													<a href="single-postv2.html"><Card.Img alt="image description" src={img71} /></a>
												</div>
												<time datetime="2011-01-12"><a href="#">25th May - Travel</a></time>
												<h2><a href="#">Traveling is awesome if you can enjoy.</a></h2>
											</div>
										</div>
									</section>
									<header className="header">
										<h2>Testimoni</h2>
									</header>
									<div className='container-swiper justify-content-center mb-5'>
										<Swiper
											modules={[Navigation, EffectFade, Autoplay]}
											navigation
											effect
											speed={800}
											slidesPerView={3}
											spaceBetween={40}
											loop
											className='mySwiper'
											autoplay={{
												delay: 2500,
												disableOnInteraction: false
											}}
										>
											<SwiperSlide className='swiper-slide' >
												<Card.Img src={img30} />
											</SwiperSlide>
											<SwiperSlide className='swiper-slide' >
												<Card.Img src={img31} />
											</SwiperSlide>
											<SwiperSlide className='swiper-slide' >
												<Card.Img src={img32} />
											</SwiperSlide>
											<SwiperSlide className='swiper-slide' >
												<Card.Img src={img33} />
											</SwiperSlide>
										</Swiper>
									</div>
									<section className="section comments wow fadeInUp" data-wow-delay="0.4s">
										<header className="header">
											<h2>Comments on this post</h2>
											<p>3 comments</p>
										</header>
										<div className="commentlist">
											<div className="commentlist-item">
												<div className="comment even thread-even depth-1" id="comment-1">
													<div className="avatar-holder">
														<Card.Img alt="image description" src={img56} className="avatar avatar-48 photo avatar-default" />
													</div>
													<div className="commentlist-holder">
														<p className="meta">
															<strong className="name"><a href="#">John Doe</a></strong>
															<a href="#"><time datetime="2011-01-12">2 hours ago</time></a>
														</p>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat.</p>
													</div>
												</div>
											</div>
											<div className="commentlist-item">
												<div className="comment even thread-even depth-1" id="comment-2">
													<div className="avatar-holder">
														<Card.Img alt="image description" src={img57} className="avatar avatar-48 photo avatar-default" />
													</div>
													<div className="commentlist-holder">
														<p className="meta">
															<strong className="name"><a href="#">John Doe</a></strong>
															<a href="#"><time datetime="2011-01-12">2 hours ago</time></a>
														</p>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat.</p>
													</div>
												</div>
												<div className="commentlist-item">
													<div className="comment even thread-even depth-1" id="comment-3">
														<div className="avatar-holder">
															<Card.Img alt="image description" src={img58} className="avatar avatar-48 photo avatar-default" />
														</div>
														<div className="commentlist-holder">
															<p className="meta">
																<strong className="name"><a href="#">John Doe</a></strong>
																<a href="#"><time datetime="2011-01-12">2 hours ago</time></a>
															</p>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section className="comment-respond wow fadeInUp" data-wow-delay="0.4s">
										<header className="header">
											<h3 id="reply-title" className="comment-reply-title">Leave a comment</h3>
											<p>it’s easy to post a comment</p>
										</header>
										<form action="http://twitter.staging.com/wp-comments-post.php" method="post" id="commentform" className="comment-form">
											<div className="wrap">
												<div className="comment-form-author">
													<label htmlFor="author">Your name <span className="required">*</span></label>
													<input type="text" id="author" name="author" size="30" aria-required="true" placeholder="enter your name here" />
												</div>
												<div className="comment-form-email">
													<label htmlFor="email">Email address <span className="required">*</span></label>
													<input type="text" id="email" name="email" size="30" aria-required="true" placeholder="enter your email address" />
												</div>
											</div>
											<div className="comment-form-url hidden"><label htmlFor="url">Website</label> <input type="text" id="url" name="url" size="30" /></div>
											<div className="comment-form-comment">
												<label htmlFor="comment">Comment <span className="required">*</span></label>
												<textarea id="comment" name="comment" rows="3" cols="72" aria-required="true" placeholder="your comment here"></textarea>
											</div>
											<p className="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a
												href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
												&lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
												datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
												&lt;strong&gt; </code></p>
											<div className="form-submit">
												<input type="submit" name="submit" id="submit" value="Leave a comment" />
												<input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
												<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
											</div>
										</form>
									</section>
								</article>
							</div>
						</div>
					</main>
					<BodyFooter />
					<Footer />
					<span id="back-top" className="fa fa-angle-up"></span>
				</div>
			</div>

		</>
	)
}

export default Index

