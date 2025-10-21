import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
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










document.addEventListener('DOMContentLoaded', function() {
    // Pequeño retraso para asegurar que todos los elementos estén cargados
    setTimeout(function() {
      try {
        var splideElement = document.querySelector('.splide');
        if (splideElement) {
          new Splide('.splide', {
            type: 'loop',
            perPage: 5,
            perMove: 5,
            gap: '0.5rem',
            autoplay: true,
            interval: 4000,
            speed: 1000,
            pauseOnHover: true,
            arrows: true,
            pagination: false,
            breakpoints: {
              1024: {
                perPage: 5,
                gap: '1rem', // Corregido
              },
              768: {
                perPage: 2,
                gap: '0.75rem',
              },
              480: {
                perPage: 1,
                gap: '0.5rem',
              }
            }
          }).mount();
          console.log('Carrusel inicializado correctamente');
        } else {
          console.warn('Elemento del carrusel no encontrado');
        }
      } catch (error) {
        console.error('Error al inicializar el carrusel:', error);
      }
    }, 100); // Pequeño retraso de 100ms
});
