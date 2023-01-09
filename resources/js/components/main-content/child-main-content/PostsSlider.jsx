import React from 'react'
import { Card } from 'react-bootstrap'
import { Navigation, EffectFade, Autoplay } from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css/bundle'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/autoplay'

const PostsSlider = ({ wisata }) => {
    return (
        <>
            <div className='container'>
                <div className='container-swiper justify-content-center mb-5'>
                    <Swiper
                        modules={[Navigation, EffectFade, Autoplay]}
                        effect
                        speed={800}
                        slidesPerView={3}
                        spaceBetween={40}
                        loop
                        grabCursor
                        className='mySwiper'
                        autoplay={{
                            delay: 2500,
                            disableOnInteraction: false
                        }}
                    >

                        {
                            wisata.map((value, i) => {
                                return <SwiperSlide className='swiper-slide' >
                                    <Card.Img src={value.gambar} className='swiper-img' />
                                    <h2><a href="single-post.html">{value.nama}</a></h2>
                                    <time dateTime="2011-01-12"><a href="#">2nd january, 2016</a></time>
                                    <a href="single-post.html" className="read-more">Continue Reading</a>
                                </SwiperSlide>
                            })
                        }
                    </Swiper>
                </div>
            </div>
        </>
    )
}

export default PostsSlider