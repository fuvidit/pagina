<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="md:mt-10 bg-[#001f6f] text-white flex flex-col md:flex-row items-center justify-center m-4 p-6 rounded-lg">

    <!-- Columna de texto -->
    <div class="w-full md:w-1/3 text-center md:text-left">
      <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center md:text-left">
        ¿DÓNDE UBICARNOS?
      </h3> <br>

      <p class="text-base md:text-xl mb-4">
        Encuentra nuestra ubicación exacta en el mapa interactivo.
      </p>
    </div>

    <!-- Columna del mapa -->
    <div class="w-full md:w-1/2">
      <div class="relative w-full h-64 md:h-96">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.094475620699!2d-66.84204042413319!3d10.493218364352028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a593450bc9be9%3A0x2d74cfa986b0c542!2sFUVIDIT!5e0!3m2!1ses!2sve!4v1712671233654!5m2!1ses!2sve"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="rounded-lg shadow-lg w-full h-full">
        </iframe>
      </div>
    </div>
  </div>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>

