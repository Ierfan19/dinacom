import React from 'react'
import img19 from '../../../../../public/images/img19.jpg'
import img20 from '../../../../../public/images/img20.jpg'
import img21 from '../../../../../public/images/img21.jpg'
import { Card } from 'react-bootstrap'

const PostsSlider = () => {
    return (
        <>
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
        </>
    )
}

export default PostsSlider