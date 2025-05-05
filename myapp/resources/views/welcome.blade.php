<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inicio</title>

    <!-- Vincula tu archivo de Tailwind CSS aquí -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Añade jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <mcreference link="https://code.jquery.com/jquery-3.6.0.min.js" index="0"></mcreference>

</head>
<body>

<x-header />

<div class="relative w-full h-[500px] sm:h-[600px] lg:h-[700px] bg-cover bg-center" style="background-image: url('../images/sala.jpg');">
  <!-- Capa de fondo oscura -->
  <div class="absolute inset-0 bg-black bg-opacity-75"></div>

  <!-- Contenido más arriba y justificado -->
  <div class="absolute inset-0 flex flex-col items-center justify-start pt-20 sm:pt-32 text-white text-justify px-6 sm:px-16 lg:px-32 z-10 max-w-3xl mx-auto">
    <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight sm:leading-snug drop-shadow-lg text-center">
      BIENVENIDO <br> A FUVIDIT WEB
    </h1>
    <p class="text-sm sm:text-lg md:text-xl mt-4 sm:mt-6 drop-shadow ubuntu">
      Este es un portal web institucional donde encontrarás información sobre la FUVIDIT.
      Entérate de todo sobre Investigación, Desarrollo e Innovación para el transporte Venezolano aquí.
    </p>
    <button class="ubuntu mt-6 sm:mt-8 bg-yellow-500 text-blue-900 font-bold text-base sm:text-lg py-2 sm:py-3 px-6 sm:px-8 rounded-lg shadow-lg hover:bg-yellow-400 transition">
      NUESTRO CATÁLOGO
    </button>
  </div>

</div>

<!-- Contenedor del Carrusel -->
<div class="relative">
    <!-- FONDO SOLO PARA EL CARRUSEL, SOBRESALE UN POCO HACIA ABAJO -->
    <span class="absolute inset-x-0 bottom-[-2vh] h-[calc(100%+5vh)] bg-yellow-50 z-[-1]"></span>

    <div class="flex justify-center mt-[-3vh] z-20 relative">
        <div class="swiper w-full h-3 max-w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/aeropostal.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/baer.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/bolipuertos.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide"><a href="https://lanuevaconferry.mppt.gob.ve/" target="_blank">
                    <img src="{{ asset('images/conferry.png') }}" alt="Slide 5"  class="w-full h-full object-cover ml-5 md:ml-20"></a>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/conviasa.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/corpologistica.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/dianca.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/eansa.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/emtrasur.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/envial.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ferrolasa.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ferroven.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/fontur.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/iaim.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/ife.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/INAC.png') }}" alt="Slide 5" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/inea.png') }}" alt="Slide 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/inferca.png') }}" alt="Slide 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metro de caracas.png') }}" alt="Slide 3" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metro de maracaibo.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metroteques.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/metrovalencia.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sava.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/sitssa.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tranzoategui.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/tromerca.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/venavega.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/yutong.png') }}" alt="Slide 4" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="max-w-7xl mx-auto px-6 py-24">
    <h2 class="text-4xl md:text-6xl font-bold text-center text-blue-900 mb-16">
        ¿QUIÉNES SOMOS?
    </h2>
    <div class="flex flex-col md:flex-row gap-17 text-xl md:text-2xl text-justify leading-relaxed">
        <p class="md:w-1/2">
            Somos: <strong class="text-red-700">Innovación, Investigación y Desarrollo</strong>. Gestionamos proyectos que impulsan la soberanía tecnológica e industrial del transporte multimodal. En febrero de 2019 se crea la Gran Misión Transporte Venezuela.
        </p>
        <p class="md:w-1/2">
            En el <strong class="text-red-700">Quinto Vertice</strong>, que es el eje científico y académico de la gran misión, se crean dos entes: la <strong class="text-red-700">UNETRANS</strong>, Universidad Nacional Experimental del Transporte, y la <strong class="text-red-700">FUVIDIT</strong>, que es la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte.
        </p>
    </div>
</div>


<x-banner /> <br><br>

<x-otic />

<div class="md:mt-[150px] h-1 w-full bg-gradient-to-r from-blue-600 via-yellow-500 to-red-600 my-10 rounded-full"></div>


<x-card />

<x-map />

<!-- Botón flotante para abrir el chat -->
<button id="open-chat-btn" class="fixed bottom-5 right-5 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 focus:outline-none z-40 transition-transform transform hover:scale-110">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
    </svg>
</button>

<!-- Ventana del Chat -->
<div id="chat-window" class="fixed bottom-20 right-5 w-80 h-[400px] bg-white rounded-lg shadow-xl border border-gray-200 flex flex-col hidden
                           transform transition-all duration-300 ease-in-out opacity-0 translate-y-10 z-50">
    <!-- Cabecera del Chat -->
    <div class="flex justify-between items-center p-3 bg-blue-600 text-white rounded-t-lg">
        <h3 class="font-semibold text-lg">Chat de Soporte</h3>
        <button id="close-chat-btn" class="text-white hover:text-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Área de Mensajes -->
    <div id="chat-messages" class="flex-1 p-4 overflow-y-auto space-y-3">
        <!-- Mensajes se añadirán aquí -->
        <div class="flex">
             <div class="bg-gray-200 text-gray-800 p-2 rounded-lg max-w-[75%]">
                ¡Hola! ¿En qué puedo ayudarte hoy?
             </div>
        </div>
    </div>

    <!-- Área de Entrada (Modificada con Formulario) -->
    <div class="p-3 border-t border-gray-200">
        <form id="chat-form" action="{{ route('mensaje.enviar') }}" method="POST">
            @csrf <!-- Token CSRF para seguridad -->
            <div class="flex items-center space-x-2">
                <input type="text" id="chat-input" name="message" placeholder="Escribe tu mensaje..."
                       class="flex-1 border border-gray-300 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" id="send-chat-btn"
                        class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    // --- Configuración Global de AJAX ---
    // Mueve $.ajaxSetup aquí para que se configure una sola vez al cargar la página
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // --- Selectores de Elementos ---
    const openChatBtn = $('#open-chat-btn');
    const closeChatBtn = $('#close-chat-btn');
    const chatWindow = $('#chat-window');
    const chatMessages = $('#chat-messages');
    const chatForm = $('#chat-form');
    const chatInput = $('#chat-input');

    // --- Funciones ---
    function appendMessage(message, sender) {
        // Escapar HTML para seguridad básica
        const escapedMessage = $('<div>').text(message).html();
        const messageAlign = sender === 'user' ? 'justify-end' : 'flex'; // 'flex' para alinear a la izquierda por defecto
        const bubbleClass = sender === 'user' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800';
        const messageElement = `
            <div class="flex ${messageAlign} mb-2">
                <div class="p-2 rounded-lg max-w-[75%] ${bubbleClass}">
                    ${escapedMessage.replace(/\n/g, '<br>')}
                </div>
            </div>`;
        chatMessages.append(messageElement);
        chatMessages.scrollTop(chatMessages[0].scrollHeight); // Scroll al final
    }

    // --- Event Listeners ---

    // Abrir chat
    openChatBtn.click(function() {
        chatWindow.removeClass('hidden opacity-0 translate-y-10');
        chatWindow.addClass('opacity-100 translate-y-0');
        openChatBtn.addClass('hidden'); // Ocultar botón de abrir
    });

    // Cerrar chat
    closeChatBtn.click(function() {
        chatWindow.removeClass('opacity-100 translate-y-0');
        chatWindow.addClass('opacity-0 translate-y-10');
        // Esperar a que termine la transición antes de ocultar y mostrar el botón
        setTimeout(() => {
            chatWindow.addClass('hidden');
            openChatBtn.removeClass('hidden'); // Mostrar botón de abrir
        }, 300); // Coincide con duration-300
    });

    // Enviar mensaje (Manejador de envío del formulario)
    chatForm.submit(function(e) {
        e.preventDefault(); // Prevenir el envío normal del formulario

        const userMessage = chatInput.val().trim();
        if (userMessage === '') {
            return; // No enviar mensajes vacíos
        }

        // Añadir mensaje del usuario a la ventana
        appendMessage(userMessage, 'user');
        chatInput.val(''); // Limpiar input

        // Enviar mensaje al servidor usando AJAX
        $.ajax({
            url: chatForm.attr('action'), // URL del action del formulario ('{{ route('mensaje.enviar') }}')
            method: chatForm.attr('method'), // Método del formulario (POST)
            data: {
                message: userMessage
                // El token CSRF se envía automáticamente gracias a $.ajaxSetup
            },
            success: function(data) {
                // Añadir respuesta del bot al chat
                if (data && data.message) { // Verifica que la respuesta tenga el formato esperado
                     appendMessage(data.message, 'bot');
                } else {
                     appendMessage("Recibí una respuesta inesperada del servidor.", 'bot');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Manejo básico de errores
                console.error("Error en AJAX:", textStatus, errorThrown, jqXHR.responseText);
                appendMessage('Error al conectar con el servidor. Intenta de nuevo.', 'bot');
            }
        });
    });

    // --- Estado Inicial ---
    // Asegurar que la ventana esté oculta y lista para animar al inicio
    // Las clases ya están en el HTML, pero esto asegura el estado si se modifica
    if (!chatWindow.hasClass('hidden')) {
         chatWindow.addClass('hidden opacity-0 translate-y-10');
    }
     if (openChatBtn.hasClass('hidden')) {
         openChatBtn.removeClass('hidden');
     }


});
</script>

</body>
</html>
