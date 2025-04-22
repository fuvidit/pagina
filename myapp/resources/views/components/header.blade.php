<header class="bg-white p-7">
    <div class="flex justify-between items-center">
        <div> 
            <img src="../images/logo.png" alt="Logo" class="w-32 pt-2"> 
        </div>

        <!-- Menú normal (Desktop) -->
        <nav class="hidden lg:flex pr-10">
            <ul class="flex space-x-6 items-center">
                <li><a href="/" class="nav-link">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a></li>
                <li><a href="/contact" class="nav-link">Observatorio del CTI</a></li>
                <li><a href="{{ route('prensa') }}" class="nav-link">Prensa</a></li>
                <li><a href="/contact" class="nav-link">Contacto</a></li>

            <li>
                <a href="{{ route('form-login') }}"
                    class="mt-1 bg-yellow-400 text-black font-bold text-base py-2 px-6 rounded-lg shadow-lg hover:bg-yellow-300 transition inline-block">
                    INICIAR SESIÓN
                </a>
            </li>


                <li>
                    <img class="atomo w-10" src="{{ asset('images/atomo.png') }}" alt="Átomo">
                </li>
            </ul>
        </nav>

        <!-- Botón de menú (Mobile) -->
        <div class="lg:hidden">
            <button class="text-[#001f6f] text-3xl focus:outline-none" id="menu-btn">☰</button>
        </div>
    </div>
</header>

<!-- Fondo Oscuro -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden transition-opacity duration-300 z-40"></div>

<!-- Menú Desplegable Lateral -->
<div id="menu" class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-50">
    <div class="flex justify-between items-center p-4 border-b">
        <h2 class="text-[#001f6f] font-bold">MENÚ</h2>
        <button id="close-menu" class="text-2xl text-gray-500">&times;</button>
    </div>
    <ul class="p-6 space-y-4">
        <li><a href="/" class="nav-link">Inicio</a></li>
        <li><a href="/nosotros" class="nav-link">Nosotros</a></li>
        <li><a href="/otic" class="nav-link">Observatorio del CTI</a></li>
        <li><a href="/prensa" class="nav-link">Prensa</a></li>
        <li><a href="/contacto" class="nav-link">Contacto</a></li>
        <li>
            <button type="button"
                class="bg-yellow-400 text-black font-bold text-lg py-2 px-6 rounded-lg shadow-lg hover:bg-yellow-300 transition">
                INICIAR SESIÓN
            </button>
        </li>
    </ul>
</div>

<!-- Animacion para menu desplegable -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menu-btn');
    const closeButton = document.getElementById('close-menu');
    const menu = document.getElementById('menu');
    const overlay = document.getElementById('overlay');

    function openMenu() {
        menu.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        setTimeout(() => overlay.classList.add('opacity-100'), 10);
    }

    function closeMenu() {
        menu.classList.add('-translate-x-full');
        overlay.classList.remove('opacity-100');
        setTimeout(() => overlay.classList.add('hidden'), 300);
    }

    menuButton.addEventListener('click', openMenu);
    closeButton.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
});
</script>

<style>
/* Estilos de la animación de subrayado */
.nav-link {
    position: relative;
    color: #001f6f;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background-color: #0085fe;
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
}

.nav-link:hover::after {
    transform: scaleX(1);
}
</style>

<script>

            const image = document.querySelector('.atomo');
            
            function rotate() {
              image.style.transform = 'rotate(' + (angle++ % 360) + 'deg)';
              requestAnimationFrame(rotate);
            }
            
            let angle = 0;
            rotate();
        
</script>