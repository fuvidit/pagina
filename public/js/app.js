import './bootstrap';
import '../css/app.css';

import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import './chatbot.js';

document.addEventListener("DOMContentLoaded", function () {
    // Primer carrusel
    const swiperMain = new Swiper(".swiper", {
        modules: [Autoplay, Navigation, Pagination],
        slidesPerView: 4,
        spaceBetween: 5,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        }
    });

    setTimeout(() => {
        swiperMain.autoplay.start();
    }, 1000);

    // Segundo carrusel (con pagination)
    const swiperPaginationDemo = new Swiper(".swiper-pagination-demo", {
        modules: [Pagination],
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination-demo .swiper-pagination",
            clickable: true,
        },
    });
});









