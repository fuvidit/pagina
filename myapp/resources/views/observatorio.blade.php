<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Observatorio - FUVIDIT</title>
    <!-- Vincula Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Vincula Chart.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

    <x-header />

    <!-- Sección Principal con posible imagen de fondo -->
    <div class="relative bg-cover bg-center py-24" style="background-image: url('{{ asset('images/foto2.jpg') }}');">
        <!-- Capa oscura opcional para mejorar legibilidad del texto -->
        <div class="absolute inset-0 bg-black bg-opacity-75"></div>

        <div class="relative container mx-auto px-6 text-white z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">Observatorio FUVIDIT</h1>
            <p class="text-lg md:text-xl text-center max-w-3xl mx-auto">
                Bienvenido al Observatorio de la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT).
                Aquí encontrarás análisis, datos y visualizaciones sobre el sector transporte en Venezuela, enfocados en impulsar la innovación y el desarrollo tecnológico.
                Este espacio está dedicado a monitorear tendencias, presentar indicadores clave y compartir estudios relevantes para la toma de decisiones estratégicas.
            </p>
        </div>
    </div>

    <!-- Sección de Indicadores (Gráficos) -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">Indicadores</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Gráfico 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $chartData['grafico1']['title'] }}</h3>
                <div class="h-64">
                    <canvas id="grafico1"></canvas>
                </div>
                <p class="text-sm text-gray-600 mt-4">Breve descripción o análisis del indicador 1.</p>
            </div>

            <!-- Gráfico 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $chartData['grafico2']['title'] }}</h3>
                 <div class="h-64">
                    <canvas id="grafico2"></canvas>
                 </div>
                 <p class="text-sm text-gray-600 mt-4">Breve descripción o análisis del indicador 2.</p>
            </div>

            <!-- Gráfico 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $chartData['grafico3']['title'] }}</h3>
                 <div class="h-64">
                    <canvas id="grafico3"></canvas>
                 </div>
                 <p class="text-sm text-gray-600 mt-4">Breve descripción o análisis del indicador 3.</p>
            </div>

            <!-- Gráfico 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $chartData['grafico4']['title'] }}</h3>
                 <div class="h-64">
                    <canvas id="grafico4"></canvas>
                 </div>
                 <p class="text-sm text-gray-600 mt-4">Breve descripción o análisis del indicador 4.</p>
            </div>

            <!-- Gráfico 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-4">{{ $chartData['grafico5']['title'] }}</h3>
                 <div class="h-64">
                    <canvas id="grafico5"></canvas>
                 </div>
                 <p class="text-sm text-gray-600 mt-4">Breve descripción o análisis del indicador 5.</p>
            </div>

        </div>
    </div>

    <!-- Espacio adicional para imágenes o contenido -->
    <div class="container mx-auto px-6 py-16">
         <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">Galería / Recursos Adicionales</h2>
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
             <!-- Ejemplo de espacio para imagen -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/imagen_ejemplo1.jpg') }}" alt="Imagen Ejemplo 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-gray-700">Descripción opcional de la imagen 1.</p>
                </div>
            </div>
             <!-- Ejemplo de espacio para imagen -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/imagen_ejemplo2.jpg') }}" alt="Imagen Ejemplo 2" class="w-full h-48 object-cover">
                 <div class="p-4">
                    <p class="text-gray-700">Descripción opcional de la imagen 2.</p>
                </div>
            </div>
             <!-- Ejemplo de espacio para imagen -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/imagen_ejemplo3.jpg') }}" alt="Imagen Ejemplo 3" class="w-full h-48 object-cover">
                 <div class="p-4">
                    <p class="text-gray-700">Descripción opcional de la imagen 3.</p>
                </div>
            </div>
         </div>
    </div>


    <x-footer />

    <x-chat-widget />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Script para inicializar gráficos con Chart.js -->
    <script>
        // Obtenemos los datos pasados desde Laravel y los convertimos a JSON
        const chartData = @json($chartData);

        // Configuración y creación de cada gráfico
        // Gráfico 1: Barras
        const ctx1 = document.getElementById('grafico1')?.getContext('2d');
        if (ctx1) {
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: chartData.grafico1.labels,
                    datasets: [{
                        label: 'Valor', // Puedes cambiar esta etiqueta
                        data: chartData.grafico1.data,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Para que se ajuste al contenedor
                    scales: { y: { beginAtZero: true } }
                }
            });
        }

        // Gráfico 2: Líneas
        const ctx2 = document.getElementById('grafico2')?.getContext('2d');
        if (ctx2) {
            new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: chartData.grafico2.labels,
                    datasets: [{
                        label: 'Tendencia',
                        data: chartData.grafico2.data,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: { responsive: true, maintainAspectRatio: false }
            });
        }

        // Gráfico 3: Torta (Pie) - Colores más vivos
        const ctx3 = document.getElementById('grafico3')?.getContext('2d');
        if (ctx3) {
            new Chart(ctx3, {
                type: 'pie',
                data: {
                    labels: chartData.grafico3.labels,
                    datasets: [{
                        label: 'Distribución',
                        data: chartData.grafico3.data,
                        backgroundColor: [ // Nuevos colores vibrantes
                            'rgba(255, 59, 48, 0.8)',  // Rojo vivo
                            'rgba(0, 122, 255, 0.8)', // Azul vivo
                            'rgba(255, 204, 0, 0.8)'  // Amarillo vivo
                        ],
                        hoverOffset: 4
                    }]
                },
                options: { responsive: true, maintainAspectRatio: false }
            });
        }

        // Gráfico 4: Radar
        const ctx4 = document.getElementById('grafico4')?.getContext('2d');
        if (ctx4) {
            new Chart(ctx4, {
                type: 'radar',
                data: {
                    labels: chartData.grafico4.labels,
                    datasets: [{
                        label: 'Evaluación',
                        data: chartData.grafico4.data,
                        fill: true,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        pointBackgroundColor: 'rgb(255, 99, 132)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(255, 99, 132)'
                    }]
                },
                options: { responsive: true, maintainAspectRatio: false }
            });
        }

        // Gráfico 5: Dona (Doughnut) - Colores más vivos
        const ctx5 = document.getElementById('grafico5')?.getContext('2d');
        if (ctx5) {
            new Chart(ctx5, {
                type: 'doughnut',
                data: {
                    labels: chartData.grafico5.labels,
                    datasets: [{
                        label: 'Estado',
                        data: chartData.grafico5.data,
                        backgroundColor: [ // Nuevos colores vibrantes
                            'rgba(52, 199, 89, 0.8)',  // Verde vivo
                            'rgba(255, 149, 0, 0.8)', // Naranja vivo
                            'rgba(88, 86, 214, 0.8)'  // Púrpura vivo
                        ],
                        hoverOffset: 4
                    }]
                },
                options: { responsive: true, maintainAspectRatio: false }
            });
        }
    </script>

</body>
</html>
