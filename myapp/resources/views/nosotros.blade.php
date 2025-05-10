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
        /* Estilos mejorados para la línea de tiempo */
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            border: 5px solid #1e3a8a;
            z-index: 1;
        }
        .timeline-line {
            position: absolute;
            left: -21px;
            top: 30px;
            bottom: -15px;
            width: 4px;
            background: linear-gradient(to bottom, #0a2472, #1e3a8a, #4267b2);
            z-index: 0;
        }
        .timeline-container > div:last-child .timeline-line {
             display: none;
        }
        /* Animación sutil para las tarjetas */
        .card-hover-effect {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        /* Estilo para desplegables */
        details summary::-webkit-details-marker { display: none; }
        details summary { list-style: none; }

        /* Estilos simplificados */
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e3a8a;
            text-align: center;
            margin-bottom: 2rem;
        }

        .simple-divider {
            height: 3px;
            width: 100%;
            background: linear-gradient(to right, #1e3a8a, #eab308, #dc2626);
            margin: 2rem 0;
        }

        .ubuntu {
            font-family: 'Ubuntu', sans-serif;
        }

        .section-container {
            background-color: #f9fafb;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 3rem;
        }

        /* Nuevos estilos de colores para las tarjetas */
        .card-mision {
            border-top-color: #dc2626;
        }

        .card-vision {
            border-top-color: #eab308;
        }

        .card-objetivo {
            border-top-color: #16a34a;
        }

        /* Colores para los valores */
        .valor-1 { border-left-color: #dc2626; }
        .valor-2 { border-left-color: #ea580c; }
        .valor-3 { border-left-color: #eab308; }
        .valor-4 { border-left-color: #16a34a; }
        .valor-5 { border-left-color: #0ea5e9; }
        .valor-6 { border-left-color: #1e3a8a; }
        .valor-7 { border-left-color: #7e22ce; }
        .valor-8 { border-left-color: #be185d; }
        .valor-9 { border-left-color: #64748b; }
        .valor-10 { border-left-color: #0f766e; }
        .valor-11 { border-left-color: #b91c1c; }

        /* Colores para la línea del tiempo */
        .timeline-item:nth-child(1) .timeline-item::before { border-color: #1e3a8a; }
        .timeline-item:nth-child(2) .timeline-item::before { border-color: #eab308; }
        .timeline-item:nth-child(3) .timeline-item::before { border-color: #dc2626; }
        .timeline-item:nth-child(4) .timeline-item::before { border-color: #16a34a; }
        .timeline-item:nth-child(5) .timeline-item::before { border-color: #7e22ce; }

        /* Barra de colores como en welcome */
        .color-bar {
            height: 3px;
            width: 100%;
            background: linear-gradient(to right, #1e3a8a, #eab308, #dc2626);
            margin: 2rem 0;
            border-radius: 9999px;
        }
    </style>
</head>

<body class="bg-white">

<x-header />

{{-- Sección Quiénes Somos - Con imagen de fondo al estilo de prensa --}}
<div class="relative w-full h-[300px] sm:h-[400px] lg:h-[500px] xl:h-[600px] bg-cover bg-center mb-5" style="background-image: url('../images/fondo-quienes-somos.jpg');">
    <!-- Capa oscura -->
    <div class="absolute inset-0 bg-black bg-opacity-75"></div>

    <!-- Contenido centrado vertical y horizontalmente -->
    <div class="absolute inset-0 flex items-center justify-center px-6 sm:px-16 lg:px-32 z-10">
        <div class="text-white max-w-5xl">
            <div class="flex flex-col sm:flex-row sm:items-end sm:gap-6">
                <!-- Título -->
                <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-tight">
                    NOSOTROS
                </h1>

                <!-- Subtítulo -->
                <div class="sm:mb-2">
                    <p class="text-sm sm:text-base lg:text-lg xl:text-xl font-semibold">
                        Quiénes somos
                    </p>
                    <p class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-200 font-normal leading-snug ubuntu">
                        Innovación, Investigación y<br>Desarrollo para el transporte
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<main class="container mx-auto px-4 py-6 md:py-8">

    {{-- Sección Creación - Simplificada --}}
    <section class="mb-16 section-container">
         <h2 class="text-4xl font-bold text-center text-blue-900 mb-6">
            Nuestra Creación
        </h2>
        <div class="text-lg text-gray-800 leading-relaxed text-justify ubuntu">
            <p>
                En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice quinto (5), que es el eje científico y académico de la GMTV, se crean dos entes: la Universidad Nacional Experimental del Transporte (UNETRANS), y la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT).

                Entre los fines de la creación de la FUVIDIT es conectar entornos académicos (donde se crean soluciones a los problemas) y entornos de producción (donde se entregan las soluciones).

                FUVIDIT se representa como el engranaje entre la Universidad Nacional Experimental del Transporte y el entorno académico, logrando así el encadenamiento productivo.
            </p>
        </div>
    </section>

    {{-- Secciones Misión, Visión, Objetivo - Simplificadas --}}
    <section class="grid md:grid-cols-3 gap-8 mb-16">
        {{-- Misión --}}
        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center card-hover-effect border-t-4 card-mision">
            <i class="bi bi-bullseye text-4xl text-red-600 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-900 mb-3">Misión</h3>
            <p class="text-gray-700 text-justify text-sm ubuntu">
                Gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodal nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.
            </p>
        </div>
        {{-- Visión --}}
        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center card-hover-effect border-t-4 card-vision">
            <i class="bi bi-eye-fill text-4xl text-yellow-500 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-900 mb-3">Visión</h3>
            <p class="text-gray-700 text-justify text-sm ubuntu">
                Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad, con un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.
            </p>
        </div>
        {{-- Objetivo --}}
        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center card-hover-effect border-t-4 card-objetivo">
            <i class="bi bi-flag-fill text-4xl text-green-600 mb-4 inline-block"></i>
            <h3 class="text-2xl font-bold text-blue-900 mb-3">Objetivo</h3>
            <p class="text-gray-700 text-justify text-sm ubuntu">
                Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel, así como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.
            </p>
        </div>
    </section>


    {{-- Sección Valores (Desplegables - Simplificados) --}}
    <section class="mb-16 section-container">
         <h2 class="text-4xl font-bold text-center text-blue-900 mb-6">
            Nuestros Valores
        </h2>
        <div class="space-y-4">
            {{-- Valor 1 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-1 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-heart-fill text-red-600 mr-2"></i>Solidaridad</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Como el principio básico en sus relaciones con la comunidad regional y nacional.
                </p>
            </details>
            {{-- Valor 2 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-2 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-check2-circle text-orange-600 mr-2"></i>Honestidad</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    En todas sus acciones con todos los ciudadanos y ciudadanas.
                </p>
            </details>
            {{-- Valor 3 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-3 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-person-check-fill text-yellow-500 mr-2"></i>Respeto</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    A los derechos humanos y al medio ambiente.
                </p>
            </details>
            {{-- Valor 4 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-4 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-emoji-smile-fill text-green-600 mr-2"></i>Sensibilidad</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Para considerar la dignidad de las personas en todos sus ámbitos de actuación.
                </p>
            </details>
            {{-- Valor 5 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-5 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-calendar2-check-fill text-sky-500 mr-2"></i>Disciplina</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Para brindar un elevado nivel de calidad de servicio.
                </p>
            </details>
            {{-- Valor 6 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-6 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-tools text-blue-900 mr-2"></i>Capacidad Técnica</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Para investigar, desarrollar e innovar en Sistemas de Transporte.
                </p>
            </details>
            {{-- Valor 7 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-7 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-award-fill text-purple-700 mr-2"></i>Consideración</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    De la creatividad y del esfuerzo de sus trabajadores.
                </p>
            </details>
            {{-- Valor 8 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-8 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-building-fill text-pink-700 mr-2"></i>Pertenencia o identificación profunda</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    De los trabajadores con la Fundación.
                </p>
            </details>
            {{-- Valor 9 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-9 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-book-fill text-slate-500 mr-2"></i>Tradición e Historia</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Como referente contínuo de nuestra acción.
                </p>
            </details>
            {{-- Valor 10 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-10 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-clipboard2-check-fill text-teal-700 mr-2"></i>Responsabilidad</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    Asumida como parte inherente de la gestión.
                </p>
            </details>
            {{-- Valor 11 --}}
            <details class="bg-blue-50 p-5 rounded-lg shadow-md group border-l-4 valor-11 hover:bg-blue-100 transition-colors">
                <summary class="font-semibold text-xl text-blue-900 cursor-pointer flex justify-between items-center">
                    <span><i class="bi bi-shield-fill-check text-red-700 mr-2"></i>Integridad</span>
                    <span class="text-blue-900 transform transition-transform duration-300 group-open:rotate-90"><i class="bi bi-chevron-right"></i></span>
                </summary>
                <p class="text-gray-700 mt-3 pl-6 text-justify ubuntu">
                    En la gestión garantizando coherencia entre lo que se dice y se hace.
                </p>
            </details>
        </div>
    </section>


    {{-- Sección Línea del Tiempo (Simplificada) --}}
    <section class="mb-16">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-10">
            Nuestra Trayectoria
        </h2>
        <div class="relative pl-12 md:pl-16 timeline-container">
            {{-- Elemento 1 --}}
            <div class="mb-12 relative timeline-item">
                <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">05 de febrero de 2019</h3>
                <div class="bg-blue-50 p-5 rounded-lg shadow-md border-l-4 border-red-600 hover:shadow-lg transition-shadow">
                    <p class="text-gray-700 ubuntu">
                        Se crea la GRAN MISIÓN TRANSPORTE VENEZUELA, concebida como un conjunto de políticas públicas y recursos en los sectores del transporte terrestre, incluyendo ferroviario y la maquinaria agrícola; acuático y aéreo; así como el sistema multimodal y sus servicios conexos, generando oportunidades para el desarrollo de una soberanía científico tecnológica autosustentable, que coadyuve en la consolidación de la Venezuela Potencia.
                    </p>
                </div>
            </div>
            {{-- Elemento 2 --}}
            <div class="mb-12 relative timeline-item">
                <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">05 de febrero de 2019</h3>
                <div class="bg-blue-50 p-5 rounded-lg shadow-md border-l-4 border-red-600 hover:shadow-lg transition-shadow">
                    <p class="text-gray-700 ubuntu">
                        Como consecuencia del Decreto de la creación de la Gran Misión Transporte Venezuela, se crea La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT), cuya creación fue ordenada mediante Decreto N° 3.758, publicado en la Gaceta Oficial N° 41.579, de la misma fecha. <br><br>
                        El patrimonio de la "FUNDACIÓN VENEZOLANA DE INVESTIGACIÓN, DESARROLLO E INNOVACIÓN PARA EL TRANSPORTE (FUVIDIT)", está conformado, entre otros, por el aporte inicial del cien por ciento (100%), otorgado por la República Bolivariana de Venezuela, por órgano del Ministerio del Poder Popular para el Transporte. <br><br>
                        El Consejo Directivo es el órgano superior de dirección y consulta de la "FUNDACIÓN VENEZOLANA DE INVESTIGACIÓN, DESARROLLO E INNOVACIÓN PARA EL TRANSPORTE (FUVIDIT)", en consecuencia establecerá y aprobará los lineamientos y políticas generales de administración, organización y funcionamiento de dicha organización.
                    </p>
                </div>
            </div>
            {{-- Elemento 3 --}}
            <div class="mb-12 relative timeline-item">
                <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">11 de julio de 2019</h3>
                <div class="bg-blue-50 p-5 rounded-lg shadow-md border-l-4 border-red-600 hover:shadow-lg transition-shadow">
                    <p class="text-gray-700 ubuntu">
                        Fue nombrado el ciudadano LUDWIG ANTONIO VERA ROJAS, como Presidente de la "Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT)", en calidad de Encargado, designado por el Ministro del Poder Popular para el Transporte.
                    </p>
                </div>
            </div>
            {{-- Elemento 4 --}}
            <div class="mb-12 relative timeline-item">
                <div class="timeline-line"></div>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">18 de junio de 2020</h3>
                <div class="bg-blue-50 p-5 rounded-lg shadow-md border-l-4 border-red-600 hover:shadow-lg transition-shadow">
                    <p class="text-gray-700 ubuntu">
                        La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT) fue constituida mediante Documento Constitutivo registrado ante el Registro Público del Municipio Chacao del Estado Miranda, bajo el N° 43, Folio 247977, Tomo 4 del Protocolo de Transcripción de dicho año, actualmente está adscrita a la Universidad Nacional Experimental del Transporte (UNETRANS).
                    </p>
                </div>
            </div>
            {{-- Elemento 5 --}}
            <div class="mb-12 relative timeline-item">
                <h3 class="text-2xl font-bold text-blue-900 mb-2">25 de marzo de 2022</h3>
                <div class="bg-blue-50 p-5 rounded-lg shadow-md border-l-4 border-red-600 hover:shadow-lg transition-shadow">
                    <p class="text-gray-700 ubuntu">
                        Se nombró a la ciudadana GERTRUDIS DEL CARMEN INFANTE PALACIOS, como Presidenta de la "Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT)".
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección Actualidad --}}
    <section class="mb-16 section-container">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-6">
            Actualidad
        </h2>
        <div class="text-lg text-gray-800 leading-relaxed text-justify ubuntu">
            <p>
                La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT) se enfoca hacia el desarrollo de un sistema de innovación tecnológica, con la finalidad de generar soluciones industriales que permitan sustituir importaciones de sistemas, equipos, partes, piezas, repuestos y otros, orientado a alcanzar progresivamente mayores niveles de apropiación de conocimientos que nos conduzcan a la independencia tecnológica.
            </p>
        </div>
    </section>

</main>

<x-footer />

<x-chat-widget />

@vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
</html>
