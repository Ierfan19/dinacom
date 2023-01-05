import React from 'react'

const ContactUs = () => {
	return (
		<>
			<div class="loader-holder">
				<div class="loader">
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
					<div class="side"></div>
				</div>
			</div>
			<div id="wrapper">
				<div class="w1">
					<header id="header" class="version-ii">
						<div class="container">
							<div class="row top-bar">
								<nav class="col-xs-12 col-sm-6 policy-nav">
									<ul>
										<li><a href="#">sitemap</a></li>
										<li><a href="#">privacy policy</a></li>
										<li><a href="#">support</a></li>
									</ul>
								</nav>
								<div class="col-xs-12 col-sm-6 pull-right hidden-xs">
									<ul class="social-networks">
										<li><a href="#"><span class="ico-facebook"></span></a></li>
										<li><a href="#"><span class="ico-twitter"></span></a></li>
										<li><a href="#"><span class="ico-google-plus"></span></a></li>
										<li><a href="#"><span class="ico-linkedin"></span></a></li>
										<li><a href="#"><span class="ico-pinterest"></span></a></li>
									</ul>
								</div>
							</div>
							<div class="row holder">
								<div class="col-xs-3 col-sm-2">
									<div class="logo"><a href="home.html"><img src="../assets/images/logo2.png" alt="dot" /></a></div>
								</div>
								<div class="col-xs-9 col-sm-10 nav-holder">
									<nav id="nav" class="navbar navbar-default">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
										<a href="#" class="pull-right icon-menu"><span class="ico-menu"></span></a>
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active" data-drop="drop-right">
													<a href="home.html">Home</a>
													<div class="drop">
														<ul>
															<li>
																<a href="home.html">Home-V1</a>
																<div class="drop">
																	<ul>
																		<li><a href="home-leftsidebar.html">left sidebar</a></li>
																		<li><a href="home-nosidebar.html">No sidebar</a></li>
																	</ul>
																</div>
															</li>
															<li>
																<a href="home-v2.html">Home-V2</a>
																<div class="drop">
																	<ul>
																		<li><a href="home-v2-rightsidebar.html">Right sidebar</a></li>
																		<li><a href="home-v2-nosidebar.html">No sidebar</a></li>
																	</ul>
																</div>
															</li>
															<li>
																<a href="home-v3.html">Home-V3</a>
																<div class="drop">
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
													<div class="drop">
														<ul>
															<li>
																<a href="single-post.html">detail-v1</a>
																<div class="drop">
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
																<div class="drop">
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
													<div class="drop">
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
						<nav class="side-nav">
							<a href="#" class="close"><i class="fa fa-times"></i></a>
							<h2>About me</h2>
							<section class="widget profile-widget">
								<div class="profile-pic">
									<a href="#">
										<img src="../assets/images/img11.jpg" alt="John Aston" />
									</a>
								</div>
								<h3><a href="#">John Aston</a></h3>
								<p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
								<ul class="social-networks">
									<li><a href="#"><span class="icon ico-facebook"></span></a></li>
									<li><a href="#"><span class="icon ico-twitter"></span></a></li>
									<li><a href="#"><span class="icon ico-google-plus"></span></a></li>
									<li><a href="#"><span class="icon ico-linkedin"></span></a></li>
									<li><a href="#"><span class="icon ico-pinterest"></span></a></li>
								</ul>
							</section>
						</nav>
					</header>
					<main id="main" role="main">
						<header class="page-head wow fadeInUp" data-wow-delay="0.6s" style="background-image: url(../assets/images/img52.jpg);">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<h1>Contact Us</h1>
										<ol class="breadcrumb">
											<li><a href="home.html">Home</a></li>
											<li class="active">Contact</li>
										</ol>
									</div>
								</div>
							</div>
						</header>
						<div class="contact-sec">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-md-8">
										<section class="comment-respond contact-form wow fadeInUp" data-wow-delay="0.6s">
											<header class="header">
												<h3 id="reply-title" class="comment-reply-title">Get in touch</h3>
												<p>We will reply your message within 24 hours!</p>
											</header>
											<form action="http://twitter.staging.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
												<div class="wrap form-group">
													<div class="comment-form-author">
														<label for="author">Your name <span class="required">*</span></label>
														<input type="text" id="author" name="author" size="30" aria-required="true" placeholder="enter your name here" />
													</div>
													<div class="comment-form-email">
														<label for="email">Email address <span class="required">*</span></label>
														<input type="text" id="email" name="email" size="30" aria-required="true" placeholder="enter your email address" />
													</div>
												</div>
												<div class="wrap form-group">
													<div class="comment-form-tel">
														<label for="nmber">Phone number <span class="required">*</span></label>
														<input type="tel" id="nmber" name="tel" placeholder="Phone number" size="30" />
													</div>
													<div class="comment-form-url">
														<label for="url">Website <span class="text-light">(Optional)</span></label>
														<input type="text" id="url" name="url" size="30" value="http://" />
													</div>
												</div>
												<div class="comment-form-comment">
													<label for="comment">Message * <span class="required">*</span></label>
													<textarea id="comment" name="comment" rows="3" cols="72" aria-required="true" placeholder="Write your message here"></textarea>
												</div>
												<p class="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a
													href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
													&lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
													datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
													&lt;strong&gt; </code></p>
												<div class="form-submit">
													<input type="submit" name="submit" id="submit" value="Leave a comment" />
													<input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
													<input type="hidden" name="comment_parent" id="comment_parent" value="0" />
												</div>
											</form>
										</section>
									</div>
									<aside class="col-xs-12 col-md-4 pull-right">
										<section class="widget profile-widget version-ii wow fadeInUp" data-wow-delay="0.6s">
											<div class="profile-pic">
												<a href="#">
													<img src="../assets/images/img11.jpg" alt="John Aston" />
												</a>
											</div>
											<h3><a href="#"><img src="../assets/images/text-jhon-aston.png" alt="jhon aston" /></a></h3>
											<p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
											<ul class="social-networks">
												<li><a href="#"><span class="icon ico-facebook"></span></a></li>
												<li><a href="#"><span class="icon ico-twitter"></span></a></li>
												<li><a href="#"><span class="icon ico-google-plus"></span></a></li>
												<li><a href="#"><span class="icon ico-linkedin"></span></a></li>
												<li><a href="#"><span class="icon ico-pinterest"></span></a></li>
											</ul>
										</section>
										<div class="widget tel-widget version-ii contact-widget wow fadeInUp" data-wow-delay="0.6s">
											<p>
												<a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#100;&#111;&#116;&#046;&#099;&#111;&#109;"><span class="ico-card icon"></span>&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#100;&#111;&#116;&#046;&#099;&#111;&#109;</a>
												<br />
												<a href="tel:+0034524325"><span class="ico-mobile icon"></span>+00-3452-4325</a>
											</p>
										</div>
									</aside>
								</div>
							</div>
						</div>
					</main>
					<aside class="aside version-ii container">
						<div class="row">
							<div class="col-xs-12 holder">
								<div class="col">
									<div class="logo"><a href="#"><img src="../assets/images/logo2.png" alt="dot" /></a></div>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
									<ul class="social-networks">
										<li><a href="#"><span class="ico-facebook"></span></a></li>
										<li><a href="#"><span class="ico-twitter"></span></a></li>
										<li><a href="#"><span class="ico-google-plus"></span></a></li>
										<li><a href="#"><span class="ico-linkedin"></span></a></li>
										<li><a href="#"><span class="ico-pinterest"></span></a></li>
									</ul>
								</div>
								<nav class="col footer-nav">
									<h3>Important Links</h3>
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Support</a></li>
									</ul>
								</nav>
								<nav class="col footer-nav">
									<h3>Popular Links</h3>
									<ul>
										<li><a href="#">About us</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Support</a></li>
									</ul>
								</nav>
								<div class="col">
									<h3>Subscribe to Newsletter</h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
									<form action="#" class="subscribe-form">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Enter your email here" />
											<button type="button" class="ico-send"></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</aside>
					<footer id="footer" class="container version-ii">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p>&copy; 2016 Copyright 2016, <a href="home.html">Dot</a>. All Rights Reserved</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<ul class="social-networks">
									<li><a href="#"><span class="ico-facebook"></span></a></li>
									<li><a href="#"><span class="ico-twitter"></span></a></li>
									<li><a href="#"><span class="ico-google-plus"></span></a></li>
									<li><a href="#"><span class="ico-linkedin"></span></a></li>
									<li><a href="#"><span class="ico-pinterest"></span></a></li>
								</ul>
							</div>
						</div>
					</footer>
					<span id="back-top" class="fa fa-angle-up"></span>
					<div id="style-changer" data-src="inc/style-changer.html"></div>
				</div>
			</div>
		</>
	)
}

export default ContactUs
