<div class="text-center py-8 md:mt-15">
  <h2 class="text-2xl md:text-6xl font-bold text-blue-900 uppercase mb-12">
    DESCUBRE MÁS SOBRE <span class="text-blue-600">NOSOTROS</span>
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

