{{-- Reducir padding horizontal (px-2 md:px-4) --}}
<footer id="footer" class="bg-gray-900 text-gray-300 py-8 px-2 md:px-4">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">

        {{-- Columna Izquierda: Iconos Sociales Apilados --}}
        <div class="flex flex-col space-y-3 items-center md:items-start">
            {{-- Los iconos deberían aparecer ahora si Bootstrap Icons está cargado --}}
            <a href="https://youtube.com/@fuvidit8887" target="_blank" class="hover:text-red-500 transition duration-300"><i class="bi bi-youtube text-2xl"></i></a>
            <a href="https://www.instagram.com/fuvidit_ve/" target="_blank" class="hover:text-pink-500 transition duration-300"><i class="bi bi-instagram text-2xl"></i></a>
            <a href="https://www.facebook.com/people/Fundaci%C3%B3n-para-el-Transporte-Fuvidit/100068992336692/" target="_blank" class="hover:text-blue-500 transition duration-300"><i class="bi bi-facebook text-2xl"></i></a>
            <a href="https://www.threads.net/@fuvidit_ve" target="_blank" class="hover:text-gray-500 transition duration-300"><i class="bi bi-threads text-2xl"></i></a>
        </div>

        {{-- Columna Central: Logo --}}
        <div class="flex justify-center">
            <img src="{{ asset('images/logowa.png') }}" width="250" alt="Logo de la Empresa"> {{-- Ajustado el tamaño para mejor proporción --}}
        </div>

        {{-- Columna Derecha: Información de Contacto --}}
        <div class="text-center md:text-right">
            <h1 class="text-xl font-semibold mb-2 text-white">Contacto</h1>
            <p class="text-sm">Teléfono: <a href="tel:(0212) 235 06 40" class="hover:text-yellow-400 transition duration-300">(0212) 235 06 40</a></p>
            <p class="text-sm">Correo: <a href="mailto:despfuvidit@gmail.com" class="hover:text-yellow-400 transition duration-300">despfuvidit@gmail.com</a></p>
            <p class="text-sm mt-2 max-w-xs mx-auto md:mx-0">Dirección: Calle Via Centro a la Autopista Fco Fajardo con Av Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071</p>
        </div>
    </div>
  </footer>

  {{-- Sección de Copyright con fondo ligeramente diferente y texto centrado --}}
  <div class="bg-gray-800 text-gray-400 py-3 text-center text-xs">
      <p>Copyright © 2025 - Todos los derechos reservados. FUVIDIT | RIF: G-20016149-3</p>
  </div>

  {{-- Asegúrate de que Bootstrap Icons esté incluido en tu proyecto o usa un CDN --}}
  {{-- Añadir el CDN de Bootstrap Icons aquí --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
