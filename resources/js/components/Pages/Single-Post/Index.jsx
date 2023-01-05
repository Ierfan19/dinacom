import React from 'react'
import { Card } from 'react-bootstrap'
import img11 from '../../../../../public/images/img11.jpg'
import img57 from '../../../../../public/images/img57.jpg'
import img61 from '../../../../../public/images/img61.jpg'
import img62 from '../../../../../public/images/img62.jpg'
import img63 from '../../../../../public/images/img63.jpg'
import img64 from '../../../../../public/images/img64.jpg'
import img59 from '../../../../../public/images/img59.jpg'
import Header from '../../Header/Header'
import BodyFooter from '../../main-content/child-main-content/BodyFooter'
import Footer from '../../Footer/Footer'

const Index = ({ singleWisata }) => {
	return (
		<>
			<div id="wrapper">
				<div className="w1">
					<Header />
					<main id="main" role="main">
						<div className="container">
							<div className="row">
								<article id="content" className="col-xs-12">
									<div className="single-postv2">
										<div className="img-holder">
											<Card.Img src={singleWisata.gambar} alt="image description" />
										</div>
										<div className="center-block">
											<time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
											<h2>{singleWisata.nama_wisata}</h2>
											<div className="info">
												<strong className="text"><span className="icon ico-user"></span><a href="#">David Ramon</a></strong>
												<strong className="text"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
												<strong className="text"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
											</div>
											<p>{singleWisata.deskripsi}</p>
											{/* <div className="text-box">
												<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
											</div> */}
											{/* <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatio nes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus  dynamicus, qui sequitur mutationem consuetudium lectorum.</p> */}
										</div>
									</div>
									<div className="widget widget-block">
										<div className="alignleft round">
											<a href="#"><Card.Img src={img11} alt="David Ramon" /></a>
										</div>
										<div className="text-holder">
											<header>
												<h2><a href="#">David Ramon</a></h2>
												<span className="subtitle"><a href="#">www.davidramon.com</a></span>
											</header>
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at <br />vero eros et accumsan et iusto odio dignissim qui blandit praesent.</p>
											<ul className="social-networks">
												<li><a href="#"><span className="ico-facebook"></span></a></li>
												<li><a href="#"><span className="ico-twitter"></span></a></li>
												<li><a href="#"><span className="ico-google-plus"></span></a></li>
												<li><a href="#"><span className="ico-linkedin"></span></a></li>
												<li><a href="#"><span className="ico-pinterest"></span></a></li>
											</ul>
										</div>
									</div>
									<section className="recent-posts">
										<header className="header">
											<h2>Recent post</h2>
											<p>you may love this post</p>
										</header>
										<ul>
											<li>
												<div className="holder">
													<div className="img-holder"><Card.Img src={img61} alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><Card.Img src={img62} alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><Card.Img src={img63} alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><Card.Img src={img59} alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
										</ul>
									</section>
									<section className="section comments">
										<header className="header">
											<h2>Comments on this post</h2>
											<p>3 comments</p>
										</header>
										<div className="commentlist">
											<div className="commentlist-item version-ii">
												<div id="comment-2" className="comment even thread-even depth-1">
													<div className="avatar-holder round">
														<img className="avatar avatar-48 photo avatar-default" src="../assets/images/img54.jpg" alt="image description" />
													</div>
													<div className="commentlist-holder">
														<p className="meta">
															<strong className="name"><a href="#">John Doe</a></strong>
															<a href="#"><time dateTime="2011-01-12">2 hours ago</time></a>
														</p>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat. <br />eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
													</div>
												</div>
												<div className="commentlist-item version-ii">
													<div id="comment-3" className="comment even thread-even depth-1">
														<div className="avatar-holder round">
															<Card.Img className="avatar avatar-48 photo avatar-default" src={img57} alt="image description" />
														</div>
														<div className="commentlist-holder">
															<p className="meta">
																<strong className="name"><a href="#">John Doe</a></strong>
																<a href="#"><time dateTime="2011-01-12">2 hours ago</time></a>
															</p>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat. <br />eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
														</div>
													</div>
												</div>
											</div>
											<div className="commentlist-item version-ii">
												<div id="comment-4" className="comment even thread-even depth-1">
													<div className="avatar-holder round">
														<Card.Img className="avatar avatar-48 photo avatar-default" src={img64} alt="image description" />
													</div>
													<div className="commentlist-holder">
														<p className="meta">
															<strong className="name"><a href="#">John Doe</a></strong>
															<a href="#"><time dateTime="2011-01-12">2 hours ago</time></a>
														</p>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam erat volutpat. <br />eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section className="comment-respond version-ii">
										<header className="header">
											<h3 className="comment-reply-title" id="reply-title">Leave a comment</h3>
											<p>it’s easy to post a comment</p>
										</header>
										<form className="comment-form" id="commentform" method="post" action="http://twitter.staging.com/wp-comments-post.php">
											<div className="wrap three-inline">
												<div className="comment-form-author">
													<input type="text" placeholder="Your name" aria-required="true" size="30" name="author" id="author" />
												</div>
												<div className="comment-form-email">
													<input type="text" placeholder="Email address" aria-required="true" size="30" name="email" id="email" />
												</div>
												<div className="comment-form-url">
													<input type="text" placeholder="Website" size="30" name="url" id="url" />
												</div>
											</div>
											<div className="comment-form-comment">
												<textarea placeholder="your comment here" aria-required="true" cols="72" rows="3" name="comment" id="comment"></textarea>
											</div>
											<p className="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a
												href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
												&lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
												dateTime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
												&lt;strong&gt; </code></p>
											<div className="form-submit">
												<input type="submit" value="Leave a comment" id="submit" name="submit" />
												<input type="hidden" id="comment_post_ID" value="1" name="comment_post_ID" />
												<input type="hidden" value="0" id="comment_parent" name="comment_parent" />
											</div>
										</form>
									</section>
								</article>
							</div>
						</div>
					</main>
					<aside className="socials container-fluid">
						<div className="row">
							<a href="#" className="facebook">
								<span className="icon ico-facebook"></span>
								<span className="txt">Facebook</span>
							</a>
							<a href="#" className="twitter">
								<span className="icon ico-twitter"></span>
								<span className="txt">twitter</span>
							</a>
							<a href="#" className="google">
								<span className="icon ico-google-plus"></span>
								<span className="txt">google+</span>
							</a>
							<a href="#" className="linkedin">
								<span className="icon ico-linkedin"></span>
								<span className="txt">linkedin</span>
							</a>
							<a href="#" className="pinterest">
								<span className="icon ico-pinterest"></span>
								<span className="txt">pinterest</span>
							</a>
						</div>
					</aside>
					<BodyFooter />
					<Footer />
					<span id="back-top" className="fa fa-angle-up"></span>
					{/* <div id="style-changer" data-src="inc/style-changer.html"></div> */}
				</div >
			</div >
		</>
	)
}

export default Index

