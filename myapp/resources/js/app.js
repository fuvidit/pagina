import './bootstrap';
import '../css/app.css';

import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules'; // Importar módulos necesarios
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper", {
        modules: [Autoplay, Navigation, Pagination], // Registrar módulos
        slidesPerView: 4, // Mostrar 4 imágenes a la vez
        spaceBetween: 5, // Espacio entre imágenes
        centeredSlides: true, // Centrar el slide activo
        loop: true, // Que el slider sea infinito
        autoplay: {
            delay: 3000, // Cambia cada 3 segundos
            disableOnInteraction: false, // Sigue en autoplay aunque el usuario interactúe
        }
    });

    // Asegurar que autoplay inicie correctamente
    setTimeout(() => {
        swiper.autoplay.start();
    }, 1000);
});








