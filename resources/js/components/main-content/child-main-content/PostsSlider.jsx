import React from 'react'
import { Card } from 'react-bootstrap'
import { Navigation, EffectFade, Autoplay } from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css/bundle'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/autoplay'

const PostsSlider = ({ galleries }) => {
    console.log(galleries)
    return (
        <>
            <div className='container mt-5'>
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
                            galleries.map((value, i) => {
                                return <SwiperSlide className='swiper-slide' >
                                    <Card.Img src={value.gambar} className='swiper-img' />
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