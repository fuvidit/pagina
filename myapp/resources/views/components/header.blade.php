<header class="bg-white p-7 relative z-30">
    <div class="flex justify-between items-center">
        <div>
            <a href="{{ route('inicio') }}"> <!-- Enlace añadido -->
                <img src="../images/logo.png" alt="Logo" class="w-32 pt-2">
            </a> <!-- Cierre del enlace -->
        </div>

        <!-- Menú normal (Desktop) -->
        <nav class="hidden lg:flex pr-10">
            <ul class="flex space-x-6 items-center">
                <li><a href="/" class="nav-link text-lg">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}" class="nav-link text-lg">Nosotros</a></li>
                <li><a href="{{ route('observatorio') }}" class="nav-link text-lg">Observatorio del CTI</a></li>
                <li class="relative group">
                    <a href="{{ route('prensa') }}" class="nav-link text-lg flex items-center">
                        Prensa
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="absolute left-0 mt-0 pt-2 w-56 z-50 dropdown-menu opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top scale-95 group-hover:scale-100">
                        <div class="bg-white rounded-lg shadow-lg py-2">
                            @guest
                            <a href="{{ route('login') }}" class="block px-4 py-2 text-[#001f6f] font-medium hover:bg-blue-50 transition text-base">
                                Comunicaciones FUVIDIT
                            </a>
                            @endguest
                            @auth
                            <a href="{{ route('noticias.crear') }}" class="block px-4 py-2 text-[#001f6f] font-medium hover:bg-blue-50 transition text-base">
                                <i class="bi bi-plus-circle mr-1"></i> Crear Noticia
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-red-600 font-medium hover:bg-red-50 transition text-base">
                                <i class="bi bi-box-arrow-right mr-1"></i> Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                            @endauth
                        </div>
                    </div>
                </li>
                <li><a href="#footer" class="nav-link text-lg scroll-smooth">Contacto</a></li>
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
        <li><a href="{{ route('inicio') }}" class="nav-link text-base">Inicio</a></li>
        <li><a href="{{ route('nosotros') }}" class="nav-link text-base">Nosotros</a></li>
        <li><a href="{{ route('observatorio') }}" class="nav-link text-base">Observatorio del CTI</a></li>
        <li>
            <div class="space-y-2">
                <a href="{{ route('prensa') }}" class="nav-link block text-base">Prensa</a>
                <a href="{{ route('login') }}" class="block ml-4 text-sm text-[#001f6f] font-medium hover:text-blue-500">
                    Comunicaciones FUVIDIT
                </a>
                @auth
                <a href="{{ route('noticias.crear') }}" class="block ml-4 text-sm text-[#001f6f] font-medium hover:text-blue-500">
                    <i class="bi bi-plus-circle mr-1"></i> Crear Noticia
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-mobile-form').submit();" class="block ml-4 text-sm text-red-600 font-medium hover:text-red-500">
                    <i class="bi bi-box-arrow-right mr-1"></i> Cerrar Sesión
                </a>
                <form id="logout-mobile-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
                @endauth
            </div>
        </li>
        <li><a href="#footer" class="nav-link text-base scroll-smooth">Contacto</a></li>
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
    
    // Animación de desplazamiento suave para enlaces de anclaje
    document.querySelectorAll('.scroll-smooth').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Cerrar el menú móvil si está abierto
                if (menu.classList.contains('-translate-x-full') === false) {
                    closeMenu();
                }
                
                // Animación de desplazamiento suave
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
                
                // Comentamos o eliminamos el efecto de resaltado temporal
                // targetElement.classList.add('highlight-section');
                // setTimeout(() => {
                //     targetElement.classList.remove('highlight-section');
                // }, 1500);
            }
        });
    });
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

/* Animación para el menú desplegable */
.dropdown-menu {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
    pointer-events: none;
}

.group:hover .dropdown-menu {
    pointer-events: auto;
}

/* Animación para resaltar la sección del footer */
@keyframes highlight {
    0% { background-color: transparent; }
    30% { background-color: transparent; }
    100% { background-color: transparent; }
}

.highlight-section {
    /* Eliminamos la animación por completo */
    /* animation: highlight 1.5s ease-in-out; */
}

/* Asegurar comportamiento de desplazamiento suave para toda la página */
html {
    scroll-behavior: smooth;
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
