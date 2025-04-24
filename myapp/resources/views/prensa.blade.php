<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prensa</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>

<x-header />

<body class="bg-gray-50">


<div class="relative w-full h-[300px] sm:h-[400px] lg:h-[500px] xl:h-[600px] bg-cover bg-center" style="background-image: url('../images/prensa.jpg');">
  <!-- Capa oscura -->
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>

  <!-- Contenido centrado vertical y horizontalmente -->
  <div class="absolute inset-0 flex items-center justify-center px-6 sm:px-16 lg:px-32 z-10">
    <div class="text-white max-w-5xl">
      <div class="flex flex-col sm:flex-row sm:items-end sm:gap-6">
        <!-- Título -->
        <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-tight">
          NOTICIAS
        </h1>

        <!-- Subtítulo -->
        <div class="sm:mb-2">
          <p class="text-sm sm:text-base lg:text-lg xl:text-xl font-semibold">
            Está pasando
          </p>
          <p class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-200 font-normal leading-snug">
            Entérate de las mejores noticias<br>del sector transporte y FUVIDIT
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="text-center py-8 md:mt-15">
  <h2 class="text-2xl md:text-6xl font-bold text-blue-900 uppercase mb-12">
    PRENSA <span class="text-blue-600">FUVIDIT</span>
  </h2>

  @php
    $noticias = [
      [
        'titulo' => 'INSERTE NOTICIA 1',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 1.',
        'imagen' => '/images/placeholder1.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 2',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 2.',
        'imagen' => '/images/placeholder2.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 3',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 3.',
        'imagen' => '/images/placeholder3.png',
      ],
    ];
  @endphp

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    @if (count($noticias) > 10)
      
    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <img src="{{ asset('storage/' . $noticia->image) }}" alt="Imagen de {{ $noticia->titulo }}" class="w-full h-40 object-cover">

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FUVIDIT</h3>
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia->titulo }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia->descripcion }}</p>
          <img src="/images/instagram.png" alt="Logo" class="w-6">
        </div>
      </div>
    @endforeach
    @else
        <h2>no hay na</h2>
    @endif
  </div>
</div>

<div class="text-center py-8 md:mt-15">

  @php
    $noticias = [
      [
        'titulo' => 'INSERTE NOTICIA 1',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 1.',
        'imagen' => '/images/placeholder1.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 2',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 2.',
        'imagen' => '/images/placeholder2.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 3',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 3.',
        'imagen' => '/images/placeholder3.png',
      ],
    ];
  @endphp

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    
    @if(count($noticias) > 10)
   
    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <img src="{{ $noticia['imagen'] }}" alt="Imagen de {{ $noticia['titulo'] }}" class="w-full h-40 object-cover">

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FLUIDIT</h3>
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia['titulo'] }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia['descripcion'] }}</p>
          <img src="/images/instagram.png" alt="Logo" class="w-6">
        </div>
      </div>
    @endforeach
    @else
        <h2>no hay na</h2>
    @endif
  </div>
</div>

<div class="md:mt-[50px] h-1 w-full bg-gradient-to-r from-blue-600 via-yellow-500 to-blue-500 my-10 rounded-full"></div>


<div class="text-center py-8 md:mt-15">

  @php
    $noticias = [
      [
        'titulo' => 'INSERTE NOTICIA 1',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 1.',
        'imagen' => '/images/placeholder1.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 2',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 2.',
        'imagen' => '/images/placeholder2.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 3',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 3.',
        'imagen' => '/images/placeholder3.png',
      ],
    ];
  @endphp

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    @if (count($noticias) > 10)
        

    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <img src="{{ $noticia['imagen'] }}" alt="Imagen de {{ $noticia['titulo'] }}" class="w-full h-40 object-cover">

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FLUIDIT</h3>
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia['titulo'] }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia['descripcion'] }}</p>
          <img src="/images/instagram.png" alt="Logo" class="w-6">
        </div>
      </div>
    @endforeach   
    
    @else
    <h2>no hay na</h2>
    @endif
  </div>
</div>


<div class="text-center py-8 md:mt-15">

  @php
    $noticias = [
      [
        'titulo' => 'INSERTE NOTICIA 1',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 1.',
        'imagen' => '/images/placeholder1.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 2',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 2.',
        'imagen' => '/images/placeholder2.png',
      ],
      [
        'titulo' => 'INSERTE NOTICIA 3',
        'descripcion' => 'Este es un texto breve para presentar la noticia número 3.',
        'imagen' => '/images/placeholder3.png',
      ],
    ];
  @endphp

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <img src="{{ $noticia['imagen'] }}" alt="Imagen de {{ $noticia['titulo'] }}" class="w-full h-40 object-cover">

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FLUIDIT</h3>
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia['titulo'] }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia['descripcion'] }}</p>
          <img src="/images/instagram.png" alt="Logo" class="w-6">
        </div>
      </div>
    @endforeach
  </div>
</div>



   


<x-footer />

</body>

</html>

