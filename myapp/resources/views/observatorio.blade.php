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
    <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[500px] xl:h-[600px] bg-cover bg-center mb-5" style="background-image: url('{{ asset('images/observatorio.jpeg') }}');">
        <!-- Capa oscura opcional para mejorar legibilidad del texto -->
        <div class="absolute inset-0 bg-black bg-opacity-75"></div>

        <div class="absolute inset-0 flex items-center justify-center px-6 sm:px-16 lg:px-32 z-10">
            <div class="text-white max-w-5xl">
                <div class="flex flex-col sm:flex-row sm:items-end sm:gap-6">
                    <!-- Título -->
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-tight">
                        OBSERVATORIO
                    </h1>

                    <!-- Subtítulo -->
                    <div class="sm:mb-2">
                        <p class="text-sm sm:text-base lg:text-lg xl:text-xl font-semibold">
                            FUVIDIT
                        </p>
                        <p class="text-xs sm:text-sm lg:text-base xl:text-lg text-gray-200 font-normal leading-snug ubuntu">
                            Datos e indicadores del<br>sector transporte
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección ¿Qué es el Observatorio? -->
    <div class="container mx-auto px-6 py-16">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-3">¿Qué es el Observatorio?</h2>
        <p class="text-lg md:text-xl text-center max-w-4xl mx-auto">
            El Observatorio de Transporte Multimodal de la FUVIDIT es el área responsable de recopilar, categorizar, analizar e interpretar información con el propósito de facilitar la formulación de las políticas públicas en Investigación, Desarrollo e Innovación para el Transporte en Venezuela.
        </p>
    </div>

    <!-- Sección de Indicadores -->
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">Indicadores de proyectos del sector transporte</h2>

        <!-- Indicadores circulares -->
        <div class="text-center mb-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="flex justify-center">
                        <div class="relative w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="absolute inset-0 rounded-full" style="background: conic-gradient(#3f3c37 0% 100%, transparent 100% 100%); clip-path: circle(50%)"></div>
                            <span class="relative z-10 text-2xl font-bold text-white">234</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mt-3">Total de Proyectos Formulados</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="flex justify-center">
                        <div class="relative w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="absolute inset-0 rounded-full" style="background: conic-gradient(#f4af36 0% 100%, transparent 100% 100%); clip-path: circle(50%)"></div>
                            <span class="relative z-10 text-2xl font-bold text-white">194</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mt-3">Total de Proyectos en Ejecución</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="flex justify-center">
                        <div class="relative w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center">
                            <div class="absolute inset-0 rounded-full" style="background: conic-gradient(#42528d 0% 100%, transparent 100% 100%); clip-path: circle(50%)"></div>
                            <span class="relative z-10 text-2xl font-bold text-white">20</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mt-3">Total de Proyectos Concluidos</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="flex justify-center">
                        <div class="relative w-24 h-24 rounded-full bg-gray-100 flex items-center justify-center">
                            <div class="absolute inset-0 rounded-full" style="background: conic-gradient(#b9322c 0% 35%, transparent 35% 100%); clip-path: circle(50%)"></div>
                            <span class="relative z-10 text-2xl font-bold text-black">35%</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold mt-3">Avance Físico General</h3>
                </div>
            </div>
        </div>

        <!-- Gráficos principales -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <!-- Gráfico de proyectos en ejecución -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Proyectos en Ejecución por Sector</h3>
                <div class="h-56">
                    <canvas id="PExS"></canvas>
                </div>
            </div>

            <!-- Gráfico de proyectos concluidos -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Proyectos Concluidos por Sector</h3>
                <div class="h-56">
                    <canvas id="PCxS"></canvas>
                </div>
            </div>
        </div>

        <!-- Gráficos por sector -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <!-- Sector Ferroviario -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Sector Ferroviario</h3>
                <div class="h-48">
                    <canvas id="PPfrr"></canvas>
                </div>
            </div>

            <!-- Sector Terrestre -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Sector Terrestre</h3>
                <div class="h-48">
                    <canvas id="PPtrr"></canvas>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <!-- Sector Aéreo -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Sector Aéreo</h3>
                <div class="h-48">
                    <canvas id="PPaer"></canvas>
                </div>
            </div>

            <!-- Sector Acuático -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Sector Acuático</h3>
                <div class="h-48">
                    <canvas id="PPacu"></canvas>
                </div>
            </div>
        </div>

        <!-- Gráfico de proyectos culminados por ente -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 mb-12 max-w-3xl mx-auto">
            <h3 class="text-lg font-semibold text-blue-800 mb-2 text-center">Proyectos Culminados por Ente</h3>
            <div class="h-80">
                <canvas id="PCxE"></canvas>
            </div>
        </div>
    </div>

    <x-footer />

    <x-chat-widget />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts para los gráficos -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gráfico de Proyectos en Ejecución por Sector
        new Chart(document.getElementById("PExS"), {
            type: "pie",
            data: {
                datasets: [{
                    data: [109, 26, 16, 43],
                    backgroundColor: ['#3f3c37','#f4af36','#42528d','#b9322c'],
                    borderWidth: 1,
                    borderColor: '#fff'
                }],
                labels: ['Sector Ferroviario', 'Sector Terrestre', 'Sector Aéreo', 'Sector Acuático']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12,
                            font: {
                                size: 11
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                let value = context.raw || 0;
                                let total = context.dataset.data.reduce((a, b) => a + b, 0);
                                let percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Gráfico de Proyectos Concluidos por Sector
        new Chart(document.getElementById("PCxS"), {
            type: "pie",
            data: {
                datasets: [{
                    data: [9, 5, 2, 4],
                    backgroundColor: ['#3f3c37','#f4af36','#42528d','#b9322c'],
                    borderWidth: 1,
                    borderColor: '#fff'
                }],
                labels: ['Sector Ferroviario', 'Sector Terrestre', 'Sector Aéreo', 'Sector Acuático']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12,
                            font: {
                                size: 11
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                let value = context.raw || 0;
                                let total = context.dataset.data.reduce((a, b) => a + b, 0);
                                let percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });

        // Gráfico de Proyectos del Sector Ferroviario
        new Chart(document.getElementById("PPfrr"), {
            type: "bar",
            data: {
                datasets: [{
                    label: 'Proyectos',
                    data: [4, 28, 16, 10, 15, 11, 3, 8, 14],
                    backgroundColor: '#3f3c37',
                    barPercentage: 0.6
                }],
                labels: ['INFERCA', 'METRO DE CARACAS', 'IFE', 'METRO LOS TEQUES', 'METRO VALENCIA', 'METRO DE MARACAIBO', 'TROMERCA', 'FERROLASA', 'FERROVEN']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 9
                            }
                        }
                    }
                }
            }
        });

        // Gráfico de Proyectos del Sector Terrestre
        new Chart(document.getElementById("PPtrr"), {
            type: "bar",
            data: {
                datasets: [{
                    label: 'Proyectos',
                    data: [4, 1, 3, 2, 4, 2, 5, 1, 4],
                    backgroundColor: '#f4af36',
                    barPercentage: 0.6
                }],
                labels: ['FUVIDIT', 'SAVA', 'SITSSA', 'CORPOLOGISTICA', 'FONTUR', 'INTT', 'TRANZOATEGUI', 'TRANSTACHIRA', 'PLANTA YUTONG']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 9
                            }
                        }
                    }
                }
            }
        });

        // Gráfico de Proyectos del Sector Aéreo
        new Chart(document.getElementById("PPaer"), {
            type: "bar",
            data: {
                datasets: [{
                    label: 'Proyectos',
                    data: [2, 1, 2, 2, 9],
                    backgroundColor: '#42528d',
                    barPercentage: 0.6
                }],
                labels: ['AEROPOSTAL', 'CONVIASA', 'INAC', 'IAIM', 'EANSA']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Gráfico de Proyectos del Sector Acuático
        new Chart(document.getElementById("PPacu"), {
            type: "bar",
            data: {
                datasets: [{
                    label: 'Proyectos',
                    data: [4, 3, 3, 2, 29, 2],
                    backgroundColor: '#b9322c',
                    barPercentage: 0.6
                }],
                labels: ['DIANCA', 'VENAVEGA', 'BOLIPUERTOS', 'INC', 'INEA', 'CONFERRY']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Gráfico de Proyectos Culminados por Ente
        new Chart(document.getElementById("PCxE"), {
            type: "bar",
            data: {
                datasets: [{
                    label: 'Proyectos Culminados',
                    data: [2, 6, 1, 1, 2, 2, 1, 1, 1, 2, 1],
                    backgroundColor: [
                        '#3f3c37','#3f3c37','#3f3c37',
                        '#f4af36','#f4af36','#f4af36',
                        '#42528d','#42528d',
                        '#b9322c','#b9322c','#b9322c'
                    ],
                    barPercentage: 0.8,
                    categoryPercentage: 0.9
                }],
                labels: ['TROMERCA', 'METRO VALENCIA', 'INFERCA', 'TRANS TÁCHIRA', 'TRANZOATEGUI', 'FUVIDIT', 'IAIM', 'AEROPOSTAL', 'CONFERRY', 'INC', 'VENAVEGA']
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    });
    </script>
</body>
</html>
