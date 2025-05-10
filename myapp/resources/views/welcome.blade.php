<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inicio</title>

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <style>
        /* Estilo para el efecto de sombra en las imágenes */
        .partner-image {
            position: relative;
            padding: 0 10px; /* Reducimos el padding horizontal */
        }

        .partner-image img {
            border-radius: 12px; /* Bordes redondeados para las imágenes */
            border: 1px solid #e5e7eb; /* Borde sutil */
            padding: 8px; /* Espacio interno */
            background-color: white; /* Fondo blanco */
            transition: transform 0.3s ease; /* Transición suave */
        }

        .partner-image img:hover {
            transform: scale(1.05); /* Ligero efecto de zoom al pasar el mouse */
        }

        .partner-image::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 15px;
            background: radial-gradient(ellipse at center, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            z-index: 1;
        }

        /* Estilo para los botones de navegación */
        .splide__arrow {
            background: #1e3a8a !important;
            opacity: 1 !important;
            width: 3rem !important;
            height: 3rem !important;
            /* Aumentamos la distancia desde el borde */
            transform: translateY(-50%) !important;
        }

        .splide__arrow--prev {
            left: -2.5rem !important;
        }

        .splide__arrow--next {
            right: -2.5rem !important;
        }

        .splide__arrow svg {
            fill: #ffffff !important;
            width: 1.5em !important;
            height: 1.5em !important;
        }

        .splide__arrow:hover {
            background: #2563eb !important;
        }

        /* Ajustamos el contenedor principal para dar más espacio a los botones */
        .splide-container {
            padding: 0 3rem;
        }
    </style>
</head>

<body>

<x-header />

<div class="relative w-full h-[500px] sm:h-[600px] lg:h-[700px] bg-cover bg-center" style="background-image: url('../images/sala.jpg');">
  <!-- Capa de fondo oscura -->
  <div class="absolute inset-0 bg-black bg-opacity-75"></div>

  <!-- Contenido más arriba y justificado -->
  <div class="absolute inset-0 flex flex-col items-center justify-start pt-20 sm:pt-32 text-white text-justify px-6 sm:px-16 lg:px-32 z-10 max-w-3xl mx-auto">
    <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight sm:leading-snug drop-shadow-lg text-center">
      BIENVENIDO <br> A FUVIDIT WEB
    </h1>
    <p class="text-sm sm:text-lg md:text-xl mt-4 sm:mt-6 drop-shadow ubuntu">
      Este es un portal web institucional donde encontrarás información sobre la FUVIDIT.
      Entérate de todo sobre Investigación, Desarrollo e Innovación para el transporte Venezolano aquí.
    </p>
    {{-- <button class="ubuntu mt-6 sm:mt-8 bg-yellow-500 text-blue-900 font-bold text-base sm:text-lg py-2 sm:py-3 px-6 sm:px-8 rounded-lg shadow-lg hover:bg-yellow-400 transition">
      NUESTRO CATÁLOGO
    </button> --}}
  </div>

</div>

<!-- Nuevo Carrusel de Aliados con Splide -->
<div class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Contenedor del Carrusel Mejorado -->
        <div class="splide-container">
            <div class="splide" role="group" aria-label="Aliados">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/aeropostal.png') }}" alt="Aeropostal" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/baer.png') }}" alt="Baer" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/bolipuertos.png') }}" alt="Bolipuertos" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <a href="https://lanuevaconferry.mppt.gob.ve/" target="_blank">
                                    <img src="{{ asset('images/conferry.png') }}" alt="Conferry" class="h-36 object-contain">
                                </a>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/conviasa.png') }}" alt="Conviasa" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/fontur.png') }}" alt="Fontur" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/inea.png') }}" alt="INEA" class="h-36 object-contain">
                            </div>
                        </li>
                        {{-- <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/intt.png') }}" alt="INTT" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/mppt.png') }}" alt="MPPT" class="h-36 object-contain">
                            </div>
                        </li> --}}
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/sitssa.png') }}" alt="SITSSA" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/tranzoategui.png') }}" alt="Tranzoategui" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/tromerca.png') }}" alt="Tromerca" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/venavega.png') }}" alt="Venavega" class="h-36 object-contain">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex items-center justify-center h-48 partner-image">
                                <img src="{{ asset('images/yutong.png') }}" alt="Yutong" class="h-36 object-contain">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="max-w-7xl mx-auto px-6 py-24">
    <h2 class="text-4xl md:text-6xl font-bold text-center text-blue-900 mb-16">
        ¿QUIÉNES SOMOS?
    </h2>
    <div class="flex flex-col md:flex-row gap-17 text-xl md:text-2xl text-justify leading-relaxed">
        <p class="md:w-1/2">
            Somos: <strong class="text-red-700">Innovación, Investigación y Desarrollo</strong>. Gestionamos proyectos que impulsan la soberanía tecnológica e industrial del transporte multimodal. En febrero de 2019 se crea la Gran Misión Transporte Venezuela.
        </p>
        <p class="md:w-1/2">
            En el <strong class="text-red-700">Quinto Vertice</strong>, que es el eje científico y académico de la gran misión, se crean dos entes: la <strong class="text-red-700">UNETRANS</strong>, Universidad Nacional Experimental del Transporte, y la <strong class="text-red-700">FUVIDIT</strong>, que es la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte.
        </p>
    </div>
</div>


<x-banner /> <br><br>

<x-otic />

<div class="md:mt-[150px] h-1 w-full bg-gradient-to-r from-blue-600 via-yellow-500 to-red-600 my-10 rounded-full"></div>


<x-card />

<x-map />

<x-footer />

{{-- Incluir el componente del chat --}}
<x-chat-widget />

@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- Inicializar Splide -->
<script>
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
</script>

</body>
</html>
