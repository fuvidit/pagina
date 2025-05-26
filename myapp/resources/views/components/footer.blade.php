{{-- Footer con márgenes reducidos --}}
<footer id="footer" class="bg-gray-900 text-gray-300 py-8 px-0">
    <div class="w-full flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">

        {{-- Columna Izquierda: Iconos Sociales en Horizontal (centrados) --}}
        <div class="flex flex-row items-center justify-center md:justify-start md:w-1/4 md:ml-4">
            {{-- Iconos más grandes con colores vivos y animaciones --}}
            <a href="https://youtube.com/@fuvidit8887" target="_blank" class="text-white hover:text-red-500 transform hover:scale-110 transition duration-300 ease-in-out mx-3">
                <i class="bi bi-youtube text-4xl" style="color: #FF0000;"></i>
            </a>
            <a href="https://www.instagram.com/fuvidit_ve/" target="_blank" class="text-white hover:text-pink-500 transform hover:scale-110 transition duration-300 ease-in-out mx-3">
                <i class="bi bi-instagram text-4xl" style="color: #E1306C;"></i>
            </a>
            <a href="https://www.facebook.com/people/Fundaci%C3%B3n-para-el-Transporte-Fuvidit/100068992336692/" target="_blank" class="text-white hover:text-blue-500 transform hover:scale-110 transition duration-300 ease-in-out mx-3">
                <i class="bi bi-facebook text-4xl" style="color: #1877F2;"></i>
            </a>
            <a href="https://www.threads.net/@fuvidit_ve" target="_blank" class="text-white hover:text-gray-500 transform hover:scale-110 transition duration-300 ease-in-out mx-3">
                <img src="{{ asset('images/threads-icon.png') }}" alt="Threads" width="38" height="38" class="inline-block">
            </a>
        </div>

        {{-- Columna Central: Información de Contacto (centrada) --}}
        <div class="flex flex-col items-center justify-center md:w-2/4 text-center">
            <h3 class="text-xl font-bold text-white mb-2">Contáctanos</h3>
            <p class="text-gray-300 mb-1"><i class="bi bi-geo-alt-fill text-red-500 mr-2"></i>Calle Via Centro a la Autopista Fco Fajardo con Av Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Los Dos Caminos, Caracas, Miranda</p>
            <p class="text-gray-300 mb-1"><i class="bi bi-telephone-fill text-green-500 mr-2"></i>(0212) 235 06 40</p>
            <p class="text-gray-300"><i class="bi bi-envelope-fill text-blue-400 mr-2"></i>despfuvidit@gmail.com</p>
        </div>

        {{-- Columna Derecha: Logo (ajustado para estar un poco más a la derecha) --}}
        <div class="flex justify-center md:justify-end md:w-1/4 md:pr-8">
            <img src="{{ asset('images/logowa.png') }}" width="200" alt="Logo de la Empresa" class="mx-auto md:mx-0">
        </div>
    </div>
</footer>

{{-- Sección de Copyright con fondo ligeramente diferente y texto centrado --}}
<div class="bg-gray-800 text-gray-400 py-3 text-center text-xs">
    <p>Copyright © 2025 - Todos los derechos reservados. FUVIDIT | RIF: G-20016149-3</p>
</div>

{{-- Asegúrate de que Bootstrap Icons esté incluido en tu proyecto o usa un CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@vite(['resources/css/app.css', 'resources/js/app.js'])