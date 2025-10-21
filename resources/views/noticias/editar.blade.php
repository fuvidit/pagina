<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Noticia</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Flatpickr para el selector de fecha y hora -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
</head>
<body>

<x-header />

<body class="bg-gray-50">

    <div class="min-h-screen flex">
        <!-- Sección izquierda con el formulario -->
        <div class="w-full md:w-1/2 bg-white-600 p-8 flex items-center justify-center">
            <div class="w-full max-w-md space-y-8">
                <h2 class="text-3xl font-bold text-[#001f6f] text-center">
                    Editar noticia
                </h2>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{session('success')}}</span>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="mt-8 space-y-6" action="{{ route('noticias.update', $noticia->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">

                        <!-- Campo de título -->
                        <div>
                            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                            <input type="text" name="titulo" id="titulo" required
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="Título de la noticia" value="{{ $noticia->titulo }}">
                        </div>

                        <!-- Campo de link -->
                        <div>
                            <label for="link" class="block text-sm font-medium text-gray-700 mb-1">Enlace</label>
                            <input type="url" name="link" id="link" 
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="https://ejemplo.com/noticia" value="{{ $noticia->link }}">
                        </div>

                        <!-- Campo de fecha y hora -->
                        <div>
                            <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">Fecha y Hora</label>
                            <input type="text" name="fecha" id="fecha" required
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="Selecciona fecha y hora" value="{{ $noticia->fecha }}">
                        </div>

                        <!-- Campo de descripción -->
                        <div>
                            <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="4" required
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="Descripción de la noticia">{{ $noticia->descripcion }}</textarea>
                        </div>

                        <!-- Campo de imagen con previsualización -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Imagen</label>
                            
                            <!-- Previsualización de la imagen actual -->
                            @if($noticia->image)
                            <div class="mb-3">
                                <p class="text-sm text-gray-600 mb-2">Imagen actual:</p>
                                <img src="{{ asset('storage/' . $noticia->image) }}" alt="Imagen actual" class="w-full h-40 object-cover rounded-lg border border-gray-300">
                            </div>
                            @endif
                            
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-[#0054db] border-dashed rounded-lg">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4h-12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-[#0054db] hover:text-[#0085fe] focus-within:outline-none mx-auto">
                                            <span>Seleccionar nueva imagen</span>
                                            <input id="image" name="image" type="file" accept="image/*" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">Formatos permitidos: JPG, PNG, GIF. Máximo 2MB.</p>
                                    <p class="text-xs text-gray-500 mt-1">Deja este campo vacío si no deseas cambiar la imagen.</p>
                                    <div id="image-preview" class="mt-2 hidden">
                                        <p class="text-sm text-gray-500">Archivo seleccionado: <span id="file-name"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent font-bold rounded-full text-black bg-[#f9bf27] hover:bg-[#ffa800] transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            ACTUALIZAR NOTICIA
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Sección derecha con la imagen de fondo -->
        <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('images/prensa.jpg') }}');">
            <div class="w-full h-full bg-black opacity-50"></div> <!-- Filtro oscuro sobre la imagen -->
        </div>
    </div>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar flatpickr para el selector de fecha y hora
            flatpickr("#fecha", {
                enableTime: true,
                dateFormat: "d-m-Y h:i K",
                time_24hr: false, // Formato 12 horas (AM/PM)
                locale: "es",
                allowInput: false,
                placeholder: "Selecciona fecha y hora",
                // Nuevas opciones para mejorar la posición
                position: "auto", // Posicionamiento automático para evitar superposiciones
                static: false,    // No forzar posición estática
                appendTo: document.getElementById('fecha').parentNode, // Adjuntar al contenedor padre
                // Personalización adicional
                disableMobile: false, // Permitir experiencia nativa en móviles
                monthSelectorType: "dropdown", // Selector de mes desplegable
                yearSelectorType: "dropdown"   // Selector de año desplegable
            });
            
            // Código para mostrar el nombre del archivo seleccionado
            const imageInput = document.getElementById('image');
            const fileNameSpan = document.getElementById('file-name');
            const imagePreview = document.getElementById('image-preview');
            
            imageInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const fileName = this.files[0].name;
                    fileNameSpan.textContent = fileName;
                    imagePreview.classList.remove('hidden');
                } else {
                    imagePreview.classList.add('hidden');
                }
            });
        });
    </script>

</body>
</html>