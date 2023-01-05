import React from 'react'
import styleChanger from '../../../../public/inc/style-changer.html'
import Header from '../Header/Header'
import Footer from '../Footer/Footer'
// import Loader from './child-main-content/Loader'
import PostsSlider from './child-main-content/PostsSlider';
import Posts from './child-main-content/Posts';
import InstagramSlider from './child-main-content/InstagramSlider';
import BodyFooter from './child-main-content/BodyFooter';

const main = () => {
    return (
        <>
            <div className="version-ii">
                <div id="wrapper">
                    <div className="w1">
                        <Header />
                        <main id="main" role="main">
                            <PostsSlider />
                            <div id="twocolumns" className="container" >
                                <Posts />
                            </div>
                            <InstagramSlider />
                        </main>
                        <BodyFooter />
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