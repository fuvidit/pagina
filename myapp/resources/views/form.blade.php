<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>

<x-header />

<body class="bg-gray-50">

    <div class="min-h-screen flex">
        <!-- Sección izquierda con el formulario -->
        <div class="w-full md:w-1/2 bg-white-600 p-8 flex items-center justify-center">
            <div class="w-full max-w-md space-y-8">
                <h2 class="text-3xl font-bold text-[#001f6f] text-center">
                    Iniciar sesión
                </h2>

                @if(session('success'))
                    <h1 class="mx-auto">{{session('success')}}</h1>
                @endif

                <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>

                        <!-- Campo de correo electrónico -->

                        <div class="mb-5">
                            <label for="email" class="sr-only">Correo electrónico</label>
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="Correo electrónico">
                        </div>

                        <!-- Campo de contraseña -->

                        <div>
                            <label for="password" class="sr-only">Contraseña</label>
                            <input type="password" name="password" id="password" autocomplete="current-password" required
                                class="appearance-none relative block w-full px-3 py-2 border border-[#0054db] placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-[#0085fe] focus:border-[#0085fe] focus:z-10"
                                placeholder="Contraseña">
                        </div>
                    </div>                    

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent font-bold rounded-full text-black bg-[#f9bf27] hover:bg-[#ffa800] transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="">
                            INICIAR SESIÓN
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Sección derecha con la imagen de fondo -->
        <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('../images/sala.jpg');">
            <div class="w-full h-full bg-black opacity-50"></div> <!-- Filtro oscuro sobre la imagen -->
        </div>
</div>

<x-footer />


</body>
</html>
