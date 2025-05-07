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
    <button id="chat-open-button" class="bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition focus:outline-none flex items-center space-x-2 transform hover:scale-105 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
        </svg>
        <span>Chat</span>
    </button>
    {{-- Eliminado el botón duplicado de aquí --}}

    {{-- Chat Window --}}
    <div id="chat-widget" class="fixed bottom-5 right-5 w-80 md:w-96 bg-white rounded-2xl shadow-xl transform scale-0 opacity-0 origin-bottom-right transition-all duration-300 z-50 flex flex-col" style="height: 450px; max-height: 80vh;">
        {{-- Chat Header --}}
        <div class="p-4 bg-blue-600 text-white rounded-t-2xl flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <h3 class="font-bold text-lg">FUVI</h3>
            </div>
            <button id="chat-close-button" class="bg-white text-blue-600 p-1.5 rounded-full hover:bg-blue-100 transition transform hover:rotate-90 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Messages Area --}}
        <div id="chat-messages" class="flex-grow p-4 space-y-4 overflow-y-auto bg-blue-50" style="min-height: 250px; max-width: 100%;">
            {{-- Example Bot Message --}}
            <div class="flex items-start mb-4">
                <div class="bg-blue-600 text-white p-3 rounded-lg rounded-tl-none shadow-md break-words max-w-[85%]">
                    <p class="text-sm">¡Hola! Soy el asistente virtual de FUVIDIT. ¿En qué puedo ayudarte hoy?</p>
                </div>
            </div>
        </div>

        {{-- Input Area --}}
        <div class="p-4 border-t border-gray-200 bg-white rounded-b-2xl">
            <div class="flex items-center space-x-2">
                <input type="text" id="chat-input" placeholder="Escribe tu mensaje..." class="flex-grow border border-gray-300 rounded-full py-2 px-4 focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                <button id="chat-send-button" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition">
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
    const chatWindow = document.getElementById('chat-widget'); // Corregido para apuntar a chat-widget
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendButton = document.getElementById('chat-send-button');

    // Respuestas predefinidas
    const responses = {
        'hola' : '¡Hola! ¿Cómo puedo ayudarte hoy?',

'buenas' : '¡Hola! ¿Cómo puedo ayudarte hoy?', // Añadido 'buenas'

'adios' : '¡Hasta luego! Que tengas un buen día.',

'adiós' : '¡Hasta luego! Que tengas un buen día.',

'chao' : '¡Hasta luego! Que tengas un buen día.', // Añadido 'chao'

'gracias' : '¡De nada! Si necesitas algo más, no dudes en preguntar.',

'ayuda' : 'Claro, ¿en qué necesitas ayuda?',

'problema' : 'Lamento que estés teniendo problemas. ¿Puedes darme más detalles?',

'informacion' : 'Claro, ¿qué tipo necesitas conocer sobre la FUVIDIT?',

'información' : 'Claro, ¿qué tipo de información necesitas?',

'significa' : 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',

'significan' : 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',

'objetivo' : 'Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel.\n\nAsí como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.', // Con salto de línea

'presidente' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',

'presidenta' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',

'preside' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',

'funcion' : 'Gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.', // Con salto de línea y corregido 'hace' a 'funcion'/'función'

'función' : 'Gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.', // Con salto de línea

'vision' : 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.', // Con salto de línea

'visión' : 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.', // Con salto de línea

'ubicacion' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',

'ubicación' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',

'queda' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',

'contacto' : 'Teléfono: (0212) 235 06 40\nCorreo electrónico: despfuvidit@gmail.com', // Con salto de línea

'areas' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',

'áreas' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',

'creacion' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',

'creación' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',

'creo' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',

'creó' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes:
    };

    const defaultResponse = 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "Cuál es el objetivo de la FUVIDIT?", "Contacto", "Cuál es su ubicación?", "Quién preside la FUVIDIT?, etc...';

    // Función para animar la apertura del chat
    function openChat() {
        // Primero mostramos el elemento (quitamos hidden)
        chatWindow.classList.remove('hidden', 'scale-0', 'opacity-0'); // Asegurarse de quitar hidden si estaba
        chatWindow.classList.add('scale-100', 'opacity-100');


        // Ocultamos el botón de abrir chat
        chatOpenButton.classList.add('hidden');
    }

    // Función para animar el cierre del chat
    function closeChat() {
        chatWindow.classList.remove('scale-100', 'opacity-100');
        chatWindow.classList.add('scale-0', 'opacity-0'); // Usar scale-0 para la animación de cierre

        // Mostramos el botón de abrir chat después de la animación
        // No es necesario esperar con setTimeout si la clase 'hidden' se maneja por la visibilidad de la ventana
        chatOpenButton.classList.remove('hidden');
    }

    chatOpenButton.addEventListener('click', openChat);
    chatCloseButton.addEventListener('click', closeChat);

    function addMessageToChat(message, sender) { // Renombrada de addMessage a addMessageToChat para evitar conflicto si existiera otra
        const messageElement = document.createElement('div');
        messageElement.classList.add('flex', 'items-start', 'mb-4', 'opacity-0', 'translate-y-2');

        if (sender === 'user') { // Cambiado isUser a sender === 'user'
            messageElement.classList.add('justify-end');
            const contentElement = document.createElement('div');
            contentElement.classList.add('bg-white', 'text-blue-800', 'p-3', 'rounded-lg', 'rounded-tr-none', 'shadow-md', 'border', 'border-gray-200', 'break-words', 'max-w-[85%]');
            contentElement.textContent = message;
            messageElement.appendChild(contentElement);
        } else { // bot
            const contentElement = document.createElement('div');
            contentElement.classList.add('bg-blue-600', 'text-white', 'p-3', 'rounded-lg', 'rounded-tl-none', 'shadow-md', 'break-words', 'max-w-[85%]');
            contentElement.textContent = message;
            messageElement.appendChild(contentElement);
        }

        chatMessages.appendChild(messageElement);

        // Animación de entrada para el mensaje
        setTimeout(() => {
            messageElement.classList.remove('opacity-0', 'translate-y-2');
            messageElement.classList.add('opacity-100', 'translate-y-0', 'transition-all', 'duration-300');
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

    // Inicialmente, la ventana de chat está oculta
    if (chatWindow) { // Asegurarse que chatWindow existe
        chatWindow.classList.add('hidden', 'scale-0', 'opacity-0');
    }
});
</script>

</body>
</html>
