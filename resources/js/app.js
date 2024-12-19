import './bootstrap';
import 'bootstrap';
import './main.js';
import Swiper from 'swiper';
import 'swiper';

const swiper = new Swiper('.swiper', {

    speed: 400,
    spaceBetween: 20,
    // autoplay: true,
    autoplay: {
        delay: 1000,
    },
    freeMode: false,
    effect: 'fade',
    // navigation: true,

    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
