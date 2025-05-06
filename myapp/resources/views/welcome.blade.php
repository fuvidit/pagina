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

<x-footer />

{{-- Chat Widget --}}
<div id="chat-widget-container" class="fixed bottom-5 right-5 z-50">
    {{-- Chat Button --}}
    <button id="chat-open-button" class="bg-blue-900 text-white p-3 rounded-full shadow-lg hover:bg-blue-800 transition focus:outline-none flex items-center space-x-2 transform hover:scale-105 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-3.862 8.25-8.625 8.25S3.75 16.556 3.75 12 7.612 3.75 12.375 3.75s8.625 3.694 8.625 8.25z" />
        </svg>
        <span class="inline">¡Prueba nuestro Bot!</span>
    </button>

    {{-- Chat Window --}}
    <div id="chat-window" class="hidden absolute bottom-20 right-0 w-80 sm:w-96 bg-white rounded-2xl shadow-2xl border border-gray-200 flex flex-col overflow-hidden transform scale-95 opacity-0 transition-all duration-300" style="max-height: 70vh;">
        {{-- Header --}}
        <div class="bg-gradient-to-r from-blue-900 to-blue-700 text-white p-4 flex justify-between items-center rounded-t-2xl">
            <div class="flex items-center space-x-3">
                <div class="bg-yellow-400 rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-900">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg">Asistente FUVIDIT</h3>
            </div>
            <button id="chat-close-button" class="bg-yellow-400 text-blue-900 p-1.5 rounded-full hover:bg-yellow-300 transition transform hover:rotate-90 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Messages Area --}}
        <div id="chat-messages" class="flex-grow p-4 space-y-4 overflow-y-auto bg-gray-50" style="min-height: 250px; max-width: 100%;">
            {{-- Example Bot Message --}}
            <div class="flex items-start space-x-2">
                <div class="bg-yellow-400 rounded-full p-2 mt-1 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                    </svg>
                </div>
                <div class="bg-white text-blue-900 p-3 rounded-lg rounded-tl-none shadow-md border border-gray-200 break-words" style="max-width: calc(100% - 3rem);">
                    <p class="text-sm">¡Hola! Soy el asistente virtual de FUVIDIT. ¿En qué puedo ayudarte hoy?</p>
                </div>
            </div>
        </div>

        {{-- Input Area --}}
        <div class="p-4 border-t border-gray-200 bg-white rounded-b-2xl">
            <div class="flex items-center space-x-2">
                <input type="text" id="chat-input" placeholder="Escribe tu mensaje..." class="flex-grow border border-gray-300 rounded-full py-2 px-4 focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                <button id="chat-send-button" class="bg-gradient-to-r from-yellow-500 to-yellow-400 text-blue-900 font-bold p-2 rounded-full hover:from-yellow-400 hover:to-yellow-300 transition focus:outline-none focus:ring-2 focus:ring-yellow-500 transform hover:scale-105 active:scale-95 duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>


@vite(['resources/css/app.css', 'resources/js/app.js'])

<script>
document.addEventListener('DOMContentLoaded', function () {
    const chatOpenButton = document.getElementById('chat-open-button');
    const chatCloseButton = document.getElementById('chat-close-button');
    const chatWindow = document.getElementById('chat-window');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendButton = document.getElementById('chat-send-button');
    
    // Respuestas predefinidas
    const responses = {
        'hola': '¡Hola! ¿En qué puedo ayudarte?',
        'quiénes somos': 'Somos FUVIDIT, la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte. Gestionamos proyectos para la soberanía tecnológica del transporte multimodal.',
        'fuvidit': 'FUVIDIT es la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte. Nuestro objetivo es impulsar la soberanía tecnológica e industrial del transporte multimodal en Venezuela.',
        'contacto': 'Puedes encontrar nuestra información de contacto en la sección correspondiente de la página o visitarnos en nuestra sede.',
        'proyectos': 'Desarrollamos diversos proyectos en el ámbito del transporte. ¿Te interesa alguno en particular?',
        'catálogo': 'Nuestro catálogo de productos y servicios está disponible en la sección "Nuestro Catálogo". ¡Te invito a revisarlo!',
        'gracias': '¡De nada! Si tienes más preguntas, no dudes en consultar.',
        'adiós': '¡Hasta luego! Que tengas un buen día.',
        'horario': 'Nuestro horario de atención es de Lunes a Viernes de 8:00 AM a 5:00 PM.',
        'misión': 'Nuestra misión es impulsar la investigación, el desarrollo y la innovación tecnológica para fortalecer el sistema de transporte multimodal en Venezuela, contribuyendo al desarrollo soberano del país.',
        'visión': 'Ser la institución líder en investigación, desarrollo e innovación para el transporte en Venezuela, reconocida por su excelencia y contribución al bienestar social y económico de la nación.',
        'servicios': 'Ofrecemos una variedad de servicios, incluyendo asesoría técnica, desarrollo de prototipos, capacitación especializada y más. ¿Podrías especificar qué tipo de servicio te interesa?',
        'ubicación': 'Nuestra sede principal se encuentra en Caracas. Puedes ver la ubicación exacta en el mapa de nuestra página web.'
    };
    
    const defaultResponse = 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "quiénes somos", "proyectos", "contacto", etc.?';

    // Función para animar la apertura del chat
    function openChat() {
        // Primero mostramos el elemento (quitamos hidden)
        chatWindow.classList.remove('hidden');
        
        // Esperamos un milisegundo para que el navegador procese el cambio
        setTimeout(() => {
            // Aplicamos la animación
            chatWindow.classList.remove('scale-95', 'opacity-0');
            chatWindow.classList.add('scale-100', 'opacity-100');
            
            // Ocultamos el botón
            chatOpenButton.classList.add('hidden');
        }, 10);
    }

    // Función para animar el cierre del chat
    function closeChat() {
        // Primero aplicamos la animación de cierre
        chatWindow.classList.remove('scale-100', 'opacity-100');
        chatWindow.classList.add('scale-95', 'opacity-0');
        
        // Esperamos a que termine la animación
        setTimeout(() => {
            // Ocultamos el chat
            chatWindow.classList.add('hidden');
            
            // Mostramos el botón
            chatOpenButton.classList.remove('hidden');
        }, 300); // Este tiempo debe coincidir con la duración de la animación
    }

    chatOpenButton.addEventListener('click', openChat);
    chatCloseButton.addEventListener('click', closeChat);

    function addMessageToChat(message, sender) {
        const messageElement = document.createElement('div');
        
        if (sender === 'user') {
            messageElement.classList.add('flex', 'justify-end', 'items-start', 'space-x-2', 'mb-4', 'opacity-0', 'transform', 'translate-x-4');
            
            const contentElement = document.createElement('div');
            contentElement.classList.add('bg-blue-600', 'text-white', 'p-3', 'rounded-lg', 'rounded-tr-none', 'shadow-md', 'break-words');
            contentElement.style.maxWidth = 'calc(100% - 1rem)';
            contentElement.textContent = message;
            
            messageElement.appendChild(contentElement);
        } else { // bot
            messageElement.classList.add('flex', 'items-start', 'space-x-2', 'mb-4', 'opacity-0', 'transform', 'translate-x-[-1rem]');
            
            const avatarElement = document.createElement('div');
            avatarElement.classList.add('bg-yellow-400', 'rounded-full', 'p-2', 'mt-1', 'flex-shrink-0');
            avatarElement.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                </svg>
            `;
            
            const contentElement = document.createElement('div');
            contentElement.classList.add('bg-white', 'text-blue-900', 'p-3', 'rounded-lg', 'rounded-tl-none', 'shadow-md', 'border', 'border-gray-200', 'break-words');
            contentElement.style.maxWidth = 'calc(100% - 3rem)';
            contentElement.textContent = message;
            
            messageElement.appendChild(avatarElement);
            messageElement.appendChild(contentElement);
        }
        
        chatMessages.appendChild(messageElement);
        
        // Animación de entrada para el mensaje
        setTimeout(() => {
            messageElement.classList.add('transition-all', 'duration-300', 'opacity-100', 'translate-x-0');
        }, 10);
        
        chatMessages.scrollTop = chatMessages.scrollHeight; // Auto-scroll to bottom
    }

    function getBotResponse(message) {
        const normalizedMessage = message.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        
        for (const [keyword, response] of Object.entries(responses)) {
            const normalizedKeyword = keyword.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            if (normalizedMessage.includes(normalizedKeyword)) {
                return response;
            }
        }
        
        return defaultResponse;
    }

    function sendMessage() {
        const messageText = chatInput.value.trim();
        if (messageText === '') return;

        addMessageToChat(messageText, 'user');
        chatInput.value = '';

        // Simular un pequeño retraso para que parezca que el bot está "pensando"
        setTimeout(() => {
            const botResponse = getBotResponse(messageText);
            addMessageToChat(botResponse, 'bot');
        }, 500);
    }

    chatSendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
});
</script>

</body>
</html>
