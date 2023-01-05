import React from 'react'

const Index = () => {
	return (
		<>
			<div id="wrapper">
				<div className="w1">

					<main id="main" role="main">
						<header className="page-head wow fadeInUp" data-wow-delay="0.6s" style="background-image: url(../assets/images/img52.jpg);">
							<div className="container">
								<div className="row">
									<div className="col-xs-12">
										<h1>Single Post v2</h1>
										<ol className="breadcrumb">
											<li><a href="home.html">Home</a></li>
											<li className="active">Single Post</li>
										</ol>
									</div>
								</div>
							</div>
						</header>
						<div className="container">
							<div className="row">
								<article id="content" className="col-xs-12 col-md-8">
									<div className="single-postv2 wow fadeInUp" data-wow-delay="0.6s">
										<ul className="list-unstyled carousel">
											<li>
												<div className="slide">
													<img src="../assets/images/img10.jpg" alt="image description" />
												</div>
											</li>
											<li>
												<div className="slide">
													<img src="../assets/images/img72.jpg" alt="image description" />
												</div>
											</li>
										</ul>
										<div className="center-block">
											<time dateTime="2011-01-12"><a href="#">25th May - Travel</a></time>
											<h2><a href="single-postv2.html">Traveling is awesome if you can enjoy.</a></h2>
											<div className="info">
												<strong className="text"><span className="icon ico-user"></span><a href="#">David Ramon</a></strong>
												<strong className="text"><span className="icon ico-comment"></span><a href="#">25 comments</a></strong>
												<strong className="text"><span className="icon ico-share"></span><a href="#">138 shares</a></strong>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid untnibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim  veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo cons equat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
											<div className="text-box">
												<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
											</div>
											<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatio nes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus  dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
									</div>
									<div className="widget widget-block wow fadeInUp" data-wow-delay="0.6s">
										<div className="alignleft round">
											<a href="#"><img src="../assets/images/img11.jpg" alt="David Ramon" /></a>
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
									<section className="recent-posts wow fadeInUp" data-wow-delay="0.6s">
										<header className="header">
											<h2>Recent post</h2>
											<p>you may love this post</p>
										</header>
										<ul>
											<li>
												<div className="holder">
													<div className="img-holder"><img src="../assets/images/img61.jpg" alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><img src="../assets/images/img62.jpg" alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><img src="../assets/images/img63.jpg" alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
											<li>
												<div className="holder">
													<div className="img-holder"><img src="../assets/images/img59.jpg" alt="image description" /></div>
													<h3><a href="single-postv2.html">I love to get up in morning to get adventure.</a></h3>
													<time dateTime="2011-01-12"><a href="#">23rd May, 2016</a></time>
												</div>
											</li>
										</ul>
									</section>
									<section className="section comments wow fadeInUp" data-wow-delay="0.6s">
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
															<img className="avatar avatar-48 photo avatar-default" src="../assets/images/img57.jpg" alt="image description" />
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
														<img className="avatar avatar-48 photo avatar-default" src="../assets/images/img58.jpg" alt="image description" />
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
									<section className="comment-respond version-ii wow fadeInUp" data-wow-delay="0.6s">
										<header className="header">
											<h3 className="comment-reply-title" id="reply-title">Leave a comment</h3>
											<p>it’s easy to post a comment</p>
										</header>
										<form className="comment-form" id="commentform" method="post" action="http://twitter.staging.com/wp-comments-post.php">
											<div className="wrap three-inline">
												<div className="comment-form-author">
													<label for="author">Your name <span className="required">*</span></label>
													<input type="text" placeholder="enter your name here" aria-required="true" size="30" name="author" id="author" />
												</div>
												<div className="comment-form-email">
													<label for="email">Email address <span className="required">*</span></label>
													<input type="text" placeholder="enter your email address" aria-required="true" size="30" name="email" id="email" />
												</div>
												<div className="comment-form-url">
													<label for="url">Website</label>
													<input type="text" placeholder="Website" size="30" name="url" id="url" />
												</div>
											</div>
											<div className="comment-form-comment">
												<label for="comment">Comment <span className="required">*</span></label>
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
								<aside id="sidebar" className="col-xs-12 col-md-4">
									<section className="widget profile-widget version-ii hidden-sm hidden-xs wow fadeInUp" data-wow-delay="0.6s">
										<div className="profile-pic">
											<a href="#">
												<img src="../assets/images/img11.jpg" alt="John Aston" />
											</a>
										</div>
										<h3><a href="#"><img src="../assets/images/text-jhon-aston.png" alt="jhon aston" /></a></h3>
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
															<img src="../assets/images/img27.jpg" alt="image description" />
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
															<img src="../assets/images/img28.jpg" alt="image description" />
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
															<img src="../assets/images/img29.jpg" alt="image description" />
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
															<img src="../assets/images/img29.jpg" alt="image description" />
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
															<img src="../assets/images/img27.jpg" alt="image description" />
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
															<img src="../assets/images/img28.jpg" alt="image description" />
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
									<div className="widget promo-widget">
										<a href="#"><img src="../assets/images/ad-placeholder.jpg" alt="“Place your Advertisement here”" /></a>
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
					</main>
					<aside className="socials container-fluid wow fadeInUp" data-wow-delay="0.6s">
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
					<span id="back-top" className="fa fa-angle-up"></span>
					<div id="style-changer" data-src="inc/style-changer.html"></div>
				</div>
			</div>
		</>
	)
}

export default Index
