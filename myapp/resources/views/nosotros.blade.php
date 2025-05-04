<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nosotros - FUVIDIT</title>

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Incluir Bootstrap Icons para los iconos --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Estilos mejorados para la línea de tiempo (sin cambios aquí) */
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px; /* Ajustado para un círculo más grande */
            top: 0;
            width: 30px; /* Círculo más grande */
            height: 30px;
            border-radius: 50%;
            background-color: #fff; /* Fondo blanco */
            border: 5px solid #facc15; /* Borde amarillo (yellow-400) */
            box-shadow: 0 0 0 4px #3b82f6; /* Sombra exterior azul (blue-500) */
            z-index: 1; /* Asegura que esté sobre la línea */
        }
        .timeline-line {
            position: absolute;
            left: -21px; /* Alineado con el centro del círculo */
            top: 30px; /* Empieza debajo del círculo */
            bottom: -15px; /* Ajusta para conectar bien */
            width: 4px;
            background: linear-gradient(to bottom, #facc15, #3b82f6, #ef4444); /* Gradiente amarillo, azul, rojo */
            z-index: 0; /* Detrás del círculo */
        }
        .timeline-container > div:last-child .timeline-line {
             display: none;
        }
        /* Animación sutil para las tarjetas (sin cambios aquí) */
        .card-hover-effect {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        /* Estilo para desplegables (sin cambios aquí) */
        details summary::-webkit-details-marker { display: none; } /* Ocultar marcador por defecto en Chrome */
        details summary { list-style: none; } /* Ocultar marcador por defecto en Firefox */

    </style>
</head>

<body class="bg-gradient-to-b from-gray-50 to-blue-50"> {{-- Fondo con gradiente sutil --}}

<x-header />

<main class="container mx-auto px-4 py-16 md:py-24">

    {{-- Sección Quiénes Somos - Borde lateral eliminado --}}
    <section class="mb-20 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-900 mb-8">
            ¿QUIÉNES SOMOS?
            {{-- Span de línea de color eliminado --}}
        </h2>
        <div class="text-lg text-gray-800 leading-relaxed text-justify">
            <p>
                Somos: <strong class="text-red-700 font-semibold">Innovación, Investigación y Desarrollo</strong>. Gestionamos proyectos que impulsan la soberanía tecnológica e industrial del transporte multimodal. En febrero de 2019 se crea la Gran Misión Transporte Venezuela.
                En el <strong class="text-red-700 font-semibold">Quinto Vertice</strong>, que es el eje científico y académico de la gran misión, se crean dos entes: la <strong class="text-red-700 font-semibold">UNETRANS</strong>, Universidad Nacional Experimental del Transporte, y la <strong class="text-red-700 font-semibold">FUVIDIT</strong>, que es la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte.
            </p>
        </div>
    </section>

    {{-- Sección Creación - Borde lateral eliminado --}}
    <section class="mb-20 bg-blue-50 p-8 rounded-xl shadow-lg">
         <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-900 mb-8">
            Nuestra Creación
             {{-- Span de línea de color eliminado --}}
        </h2>
        <div class="text-lg text-gray-800 leading-relaxed text-justify">
            <p>
                (Aquí va una breve descripción sobre cómo y cuándo se creó FUVIDIT, sus motivaciones iniciales, etc.) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </section>

    {{-- Secciones Misión, Visión, Objetivo - Bordes superiores eliminados --}}
    <section class="grid md:grid-cols-3 gap-10 mb-20">
        {{-- Misión --}}
        <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover-effect">
            <i class="bi bi-bullseye text-5xl text-blue-500 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-800 mb-3">Misión</h3>
            <p class="text-gray-600 text-justify text-sm">
                (Descripción de la Misión de FUVIDIT) Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
            </p>
        </div>
        {{-- Visión --}}
        <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover-effect">
             <i class="bi bi-eye-fill text-5xl text-yellow-400 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-800 mb-3">Visión</h3>
            <p class="text-gray-600 text-justify text-sm">
                (Descripción de la Visión de FUVIDIT) Sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        {{-- Objetivo --}}
        <div class="bg-white p-6 rounded-lg shadow-md text-center card-hover-effect">
             <i class="bi bi-flag-fill text-5xl text-red-500 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-800 mb-3">Objetivo</h3>
            <p class="text-gray-600 text-justify text-sm">
                (Descripción del Objetivo principal de FUVIDIT) Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>
        </div>
    </section>

    {{-- Sección Valores (Desplegables - Bordes izquierdos mantenidos) --}}
    <section class="mb-20 bg-white p-8 rounded-xl shadow-lg">
         <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-900 mb-10">
            Nuestros Valores
             {{-- Span de línea de color eliminado --}}
        </h2>
        <div class="space-y-5">
            {{-- Valor 1 --}}
            <details class="bg-gray-50 p-5 rounded-lg shadow-sm group border-l-4 border-blue-500">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-lightbulb-fill text-yellow-500 mr-2"></i>Innovación</span>
                    <span class="text-blue-600 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify">
                    Descripción detallada del valor de la Innovación dentro de FUVIDIT. Cómo se fomenta, ejemplos, etc.
                </p>
            </details>
            {{-- Valor 2 --}}
            <details class="bg-gray-50 p-5 rounded-lg shadow-sm group border-l-4 border-yellow-500">
                 <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-people-fill text-red-500 mr-2"></i>Compromiso</span>
                    <span class="text-blue-600 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify">
                    Descripción detallada del valor del Compromiso dentro de FUVIDIT. Con los proyectos, el país, etc.
                </p>
            </details>
            {{-- Valor 3 --}}
            <details class="bg-gray-50 p-5 rounded-lg shadow-sm group border-l-4 border-red-500">
                 <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-patch-check-fill text-blue-500 mr-2"></i>Excelencia</span>
                    <span class="text-blue-600 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify">
                    Descripción detallada del valor de la Excelencia dentro de FUVIDIT. Búsqueda de la calidad, etc.
                </p>
            </details>
             {{-- Agrega más valores aquí siguiendo el mismo formato --}}
        </div>
    </section>

    {{-- Sección Línea del Tiempo (Sin cambios en estructura o estilos principales) --}}
    <section class="mb-16">
         <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-900 mb-16">
            Nuestra Trayectoria
             {{-- Span de línea de color eliminado --}}
        </h2>
        <div class="relative pl-12 md:pl-16 timeline-container"> {{-- Aumentado padding izquierdo --}}
            {{-- Elemento 1 --}}
            <div class="mb-12 relative timeline-item">
                <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-800 mb-2">Año/Fecha 1</h3>
                <div class="bg-white p-5 rounded-lg shadow-xl border border-gray-200">
                    <p class="text-gray-700">
                        Descripción del hito o evento importante en esta fecha. Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            {{-- Elemento 2 --}}
            <div class="mb-12 relative timeline-item">
                 <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-800 mb-2">Año/Fecha 2</h3>
                 <div class="bg-white p-5 rounded-lg shadow-xl border border-gray-200">
                    <p class="text-gray-700">
                        Otro hito importante. Consectetur adipiscing elit.
                    </p>
                 </div>
            </div>
            {{-- Elemento 3 --}}
             <div class="mb-12 relative timeline-item">
                {{-- Sin timeline-line si es el último --}}
                <h3 class="text-2xl font-bold text-blue-800 mb-2">Año/Fecha 3</h3>
                 <div class="bg-white p-5 rounded-lg shadow-xl border border-gray-200">
                    <p class="text-gray-700">
                        Último hito registrado. Sed do eiusmod tempor incididunt.
                    </p>
                 </div>
            </div>
            {{-- Agrega más elementos aquí --}}
        </div>
    </section>

</main>

<x-footer />

@vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
</html>
