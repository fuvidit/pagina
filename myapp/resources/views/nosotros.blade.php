<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio</title>

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>

<body>
    
<x-header />
<br><br><br><br>

<!-- Carrusel con paginación -->
<div class="swiper-pagination-demo">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="{{ asset('images/conferry.png') }}"></div>
    <div class="swiper-slide">B</div>
    <div class="swiper-slide">C</div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<br><br> <br><br><br><br><br><br><br><br><br><br>
<x-footer />




@vite(['resources/css/app.css', 'resources/js/app.js',])

</body>




</html>