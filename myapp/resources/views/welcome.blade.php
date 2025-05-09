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
    <button class="ubuntu mt-6 sm:mt-8 bg-yellow-500 text-blue-900 font-bold text-base sm:text-lg py-2 sm:py-3 px-6 sm:px-8 rounded-lg shadow-lg hover:bg-yellow-400 transition">
      NUESTRO CATÁLOGO
    </button>
  </div>

</div>

<!-- Contenedor del Carrusel -->
<div class="relative">
    <!-- FONDO SOLO PARA EL CARRUSEL, SOBRESALE UN POCO HACIA ABAJO -->
    <span class="absolute inset-x-0 bottom-[-2vh] h-[calc(100%+5vh)] bg-gray-100 z-[-1]"></span>

    <div class="flex justify-center mt-[-3vh] z-20 relative">
        <div class="swiper w-full h-3 max-w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/aeropostal.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/baer.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/bolipuertos.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide"><a href="https://lanuevaconferry.mppt.gob.ve/" target="_blank">
                    <img src="{{ asset('images/conferry.png') }}" alt="Slide 5"  class="w-full h-full object-cover ml-5 md:ml-20"></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/conviasa.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/corpologistica.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/dianca.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/eansa.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/emtrasur.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/envial.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ferrolasa.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ferroven.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/fontur.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/iaim.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ife.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/INAC.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/inea.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/inferca.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metro de caracas.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metro de maracaibo.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metroteques.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metrovalencia.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sava.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sitssa.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tranzoategui.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tromerca.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/venavega.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/yutong.png') }}" alt="Slide 4" class="w-full h-full object-cover">
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

</body>
</html>
