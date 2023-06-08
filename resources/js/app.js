import './bootstrap';

import Alpine from 'alpinejs';
import Swiper from "swiper";


window.Alpine = Alpine;

Alpine.start();


const bannerSwiper = new Swiper('.banner-slide', {
    // Swiper 옵션 설정
});

const mainProductSwiper = new Swiper('.main-product-slide', {
    // Swiper 옵션 설정
    slidesPerView:4,
    spaceBetween:32,
    speed:400,
    resizeObserver:true,
    autoplay:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 480px
        320: {
            slidesPerView:2.5,
            spaceBetween: 16,
        },
        1024: {

            slidesPerView: 3,
            spaceBetween: 16
        },
        // when window width is >= 640px
        1300: {
            slidesPerView: 4,
            spaceBetween: 32
        }
    }
});

window.addEventListener('resize',(e) => {
    mainProductSwiper.forEach((swiper,index) => {
        swiper.update();
    })
})

