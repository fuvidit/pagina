<nav class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        {{-- Logo u otros elementos izquierdos --}}
        <div class="flex-shrink-0 flex items-center">
          <img class="h-8 w-auto" src="/images/logo.png" alt="Logo"> {{-- Ajusta la ruta del logo --}}
        </div>
        {{-- Enlaces de navegación principales --}}
        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
          <a href="{{ route('index') }}" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"> Inicio </a>
          <a href="{{ route('prensa') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"> Prensa </a>
          {{-- Otros enlaces... --}}
        </div>
      </div>

      {{-- Botones de autenticación a la derecha --}}
      <div class="hidden sm:ml-6 sm:flex sm:items-center">

        @guest {{-- Mostrar si el usuario NO está autenticado --}}
          <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
            Iniciar Sesión
          </a>
          {{-- Podrías añadir un botón de registro aquí también si lo necesitas --}}
          {{-- <a href="{{ route('register') }}" class="ml-4 inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Registrarse </a> --}}
        @endguest

        @auth {{-- Mostrar si el usuario SÍ está autenticado --}}
          {{-- Botón para ir a la página de crear noticia --}}
          {{-- Asegúrate de que la ruta 'noticias.create' exista y apunte al formulario de creación --}}
          <a href="{{ route('noticias.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 mr-3">
            Montar Noticia
          </a>

          {{-- Botón/Formulario para cerrar sesión --}}
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
              Cerrar Sesión
            </button>
          </form>
          {{-- Podrías mostrar el nombre del usuario aquí también --}}
          {{-- <span class="ml-3 text-sm text-gray-600">Hola, {{ Auth::user()->name }}</span> --}}
        @endauth

      </div>

      {{-- Menú hamburguesa para móviles (si lo tienes) --}}
      {{-- ... --}}

    </div>
  </div>

  {{-- Menú desplegable móvil (si lo tienes) --}}
  {{-- ... --}}
</nav>