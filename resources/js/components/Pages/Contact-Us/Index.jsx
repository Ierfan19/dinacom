import React from 'react'
import Header from '../../Header/Header'
import BodyFooter from '../../main-content/child-main-content/BodyFooter'
import Footer from '../../Footer/Footer'
import FormContactUs from './child-contact-us-pages/FormContactUs'
import SideProfile from './child-contact-us-pages/SideProfile'
import { Link } from '@inertiajs/inertia-react'

const ContactUs = () => {
	return (
		<>
			<div id="wrapper">
				<div className="w1">
					<Header />
					<main id="main" role="main">
						<header className="page-head wow fadeInUp" data-wow-delay="0.6s" >
							<div className="container">
								<div className="row">
									<div className="col-xs-12">
										<h1>Contact Us</h1>
										<ol className="breadcrumb">
											<li>
												<Link href='/' >HOME</Link>
											</li>
											<li className="active">Contact</li>
										</ol>
									</div>
								</div>
							</div>
						</header>
						<div className="contact-sec">
							<div className="container">
								<div className="row">
									<div className="col-xs-12 col-md-8">
										<FormContactUs />
									</div>
									<SideProfile />
								</div>
							</div >
						</div >
					</main >
					<BodyFooter />
					<Footer />
					<span id="back-top" className="fa fa-angle-up"></span>
					<div id="style-changer" data-src="inc/style-changer.html"></div>
				</div >
			</div >
		</>
	)
}

export default ContactUs
