import React from 'react'
import { Card } from 'react-bootstrap'
import img11 from '../../../../../../public/images/img11.jpg'

const SideProfile = () => {
    return (
        <>
            <aside className="col-xs-12 col-md-4 pull-right">
                <section className="widget profile-widget version-ii wow fadeInUp" data-wow-delay="0.6s">
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
                <div className="widget tel-widget version-ii contact-widget wow fadeInUp" data-wow-delay="0.6s">
                    <p>
                        <a href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#100;&#111;&#116;&#046;&#099;&#111;&#109;"><span className="ico-card icon"></span>&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#100;&#111;&#116;&#046;&#099;&#111;&#109;</a>
                        <br />
                        <a href="tel:+0034524325"><span className="ico-mobile icon"></span>+00-3452-4325</a>
                    </p>
                </div>
            </aside>
        </>
    )
}

export default SideProfile