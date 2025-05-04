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

  {{-- Eliminamos el bloque @php con datos estáticos --}}

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    {{-- Verificamos si la colección $noticias no está vacía --}}
    @if ($noticias->isNotEmpty())

    {{-- Iteramos sobre las noticias pasadas desde el controlador --}}
    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        {{-- Asumiendo que 'imagen' guarda la ruta relativa dentro de 'storage/app/public' --}}
        {{-- Asegúrate de haber ejecutado 'php artisan storage:link' --}}
        <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="Imagen de {{ $noticia->titulo }}" class="w-full h-40 object-cover"> {{-- <-- Usando 'imagen' --}}

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FUVIDIT</h3>
          {{-- Accedemos a las propiedades del objeto $noticia --}}
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia->titulo }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia->descripcion }}</p>
          {{-- Puedes añadir un enlace a la noticia completa si lo tienes --}}
          {{-- <a href="{{ route('noticia.show', $noticia->id) }}" class="text-blue-600 hover:underline">Leer más</a> --}}
          {{-- O mantener el icono si es relevante --}}
          <img src="/images/instagram.png" alt="Logo" class="w-6">
        </div>
      </div>
    @endforeach
    @else
        {{-- Mensaje si no hay noticias --}}
        <p class="text-gray-600 col-span-full">No hay noticias disponibles en este momento.</p>
    @endif
  </div>
</div>

{{-- Eliminamos la barra divisora y la sección duplicada de noticias --}}

<x-footer />

</body>

</html>

