<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class=" bg-custom-gradient text-white flex flex-col md:flex-row items-center justify-center gap-4 m-3">
    <div class="text-center md:text-left p-6">
        <h3 class="text-xl md:text-5xl font-bold">¡ESCANEA <span class="text-yellow-400">AQUÍ!</span></h3>
        <p class="mt-2 text-sm md:text-base max-w-md">
            En su portal web encontrarás información sobre nuestros desarrollos basados en PINDIT. Estás a solo un clic de conocer innovaciones, desarrollos e inversiones para el transporte Venezolano aquí.
        </p>
    </div>
    <div>
        <img src="{{ asset('images/cel.png') }}" alt="Código QR" class="w-60 md:w-70 mt-10">
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
