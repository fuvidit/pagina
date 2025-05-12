<div class="text-center py-8 md:mt-15">
  <h2 class="text-2xl md:text-6xl font-bold text-blue-900 uppercase mb-12">
    DESCUBRE MÁS SOBRE <span class="text-blue-600">NOSOTROS</span>
  </h2>


  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4 max-w-6xl mx-auto">
    @if ($noticias->isNotEmpty())

    {{-- Iteramos sobre las noticias pasadas desde el controlador --}}
    @foreach($noticias as $noticia)
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        {{-- Asumiendo que 'imagen' guarda la ruta relativa dentro de 'storage/app/public' --}}
        {{-- Asegúrate de haber ejecutado 'php artisan storage:link' --}}
        <img src="{{ asset('storage/' . $noticia->image) }}" alt="Imagen de {{ $noticia->titulo }}" class="w-full h-40 object-cover"> {{-- <-- Usando 'imagen' --}}

        <div class="p-4 text-left">
          <h3 class="text-xs font-semibold text-gray-500 uppercase mb-1">NOTICIAS FUVIDIT</h3>
          {{-- Accedemos a las propiedades del objeto $noticia --}}
          <h4 class="text-md font-bold text-blue-900 mb-2 uppercase">{{ $noticia->titulo }}</h4>
          <p class="text-sm text-gray-600 mb-4">{{ $noticia->descripcion }}</p>
          {{-- Mostrar el icono de Instagram solo si hay un enlace --}}
          @if($noticia->link)
            <a href="{{ $noticia->link }}" target="_blank" rel="noopener noreferrer">
              <img src="/images/instagram.png" alt="Logo Instagram" class="w-6">
            </a>
          @endif
          
          @auth
          {{-- Botones de edición y eliminación --}}
          <div class="mt-4 flex space-x-2">
            <a href="{{ route('noticias.editar', $noticia->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded-md text-sm transition duration-300">
              Editar
            </a>
            
            <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-md text-sm transition duration-300" onclick="return confirm('¿Estás seguro de que deseas eliminar esta noticia?')">
                Eliminar
              </button>
            </form>
          </div>
          @endauth
        </div>
      </div>
    @endforeach
    @else
        {{-- Mensaje si no hay noticias --}}
        <p class="text-gray-600 col-span-full">No hay noticias disponibles en este momento.</p>
    @endif
  </div>
</div>

