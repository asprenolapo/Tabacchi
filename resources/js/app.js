import './bootstrap';
import 'bootstrap';
import './main.js';
import Swiper from 'swiper/bundle';
import 'swiper';

const swiper = new Swiper("#cigarSwiper", {
    slidesPerView: 6,
    spaceBetween: 20,
    freeMode: true,
    autoplay:
    {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        1024: {
            slidesPerView: 6,
        }
    }
});

