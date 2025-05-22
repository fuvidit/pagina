{{-- Chat Widget Component --}}
<div id="chat-widget-container" class="fixed bottom-5 right-5 z-50">
    {{-- Chat Button --}}
    <button id="chat-open-button" class="bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition focus:outline-none flex items-center space-x-2 transform hover:scale-105 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
        </svg>
        <span>Habla con Fuvi!</span>
    </button>

    {{-- Chat Window --}}
    <div id="chat-widget" class="fixed bottom-5 right-5 w-80 md:w-96 bg-white rounded-2xl shadow-xl transform scale-0 opacity-0 origin-bottom-right transition-all duration-300 z-50 flex flex-col" style="height: 450px; max-height: 80vh;">
        {{-- Chat Header --}}
        <div class="p-4 bg-blue-600 text-white rounded-t-2xl flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <h3 class="font-bold text-lg">Fuvi</h3>
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
                    <p class="text-sm">¡Hola! Soy Fuvi. ¿En qué puedo ayudarte hoy?</p>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const chatOpenButton = document.getElementById('chat-open-button');
    const chatCloseButton = document.getElementById('chat-close-button');
    const chatWindow = document.getElementById('chat-widget');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendButton = document.getElementById('chat-send-button');

    // Respuestas predefinidas
    const responses = {
        'hola' : '¡Hola! ¿Cómo puedo ayudarte hoy?',
        'buenas' : '¡Hola! ¿Cómo puedo ayudarte hoy?',
        'adios' : '¡Hasta luego! Que tengas un buen día.',
        'adiós' : '¡Hasta luego! Que tengas un buen día.',
        'chao' : '¡Hasta luego! Que tengas un buen día.',
        'gracias' : '¡De nada! Si necesitas algo más, no dudes en preguntar.',
        'ayuda' : 'Claro, ¿en qué necesitas ayuda?',
        'problema' : 'Lamento que estés teniendo problemas. ¿Puedes darme más detalles?',
        'informacion' : 'Claro, ¿qué tipo necesitas conocer sobre la FUVIDIT?',
        'información' : 'Claro, ¿qué tipo de información necesitas?',
        'significa' : 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',
        'significan' : 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',
        'objetivo' : 'Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel.\n\nAsí como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.',
        'presidente' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
        'presidenta' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
        'preside' : 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
        'funcion' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'función' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'vision' : 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.',
        'visión' : 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.',
        'ubicacion' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
        'ubicación' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
        'queda' : 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
        'contacto' : 'Teléfono: (0212) 235 06 40\nCorreo electrónico: despfuvidit@gmail.com',
        'areas' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
        'áreas' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
        'áreas abarca' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
        'areas abarca' : 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
        'creacion' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
        'creación' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
        'creo' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
        'creó' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
        'creada' : 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
        'observatorio' : 'El Observatorio de Transporte Multimodal de la FUVIDIT es el área responsable de recopilar, categorizar, analizar e interpretar información con el propósito de facilitar la formulación de las políticas públicas en Investigación, Desarrollo e Innovación para el Transporte en Venezuela.',
        'fuvidit' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'que es' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'hace' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'que hace' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'encargan' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'encarga' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
        'ministro de transporte' : 'Ramón Celestino Velásquez Araguayán'

    };

    const defaultResponse = 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "objetivo", "contacto", "ubicación", "presidente" o "creación"?';

    // Función para animar la apertura del chat
    function openChat() {
        chatWindow.classList.remove('hidden', 'scale-0', 'opacity-0');
        chatWindow.classList.add('scale-100', 'opacity-100');
        chatOpenButton.classList.add('hidden');
    }

    // Función para animar el cierre del chat
    function closeChat() {
        chatWindow.classList.remove('scale-100', 'opacity-100');
        chatWindow.classList.add('scale-0', 'opacity-0');
        chatOpenButton.classList.remove('hidden');
    }

    // Función para agregar un mensaje al chat
    function addMessage(text, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'flex items-start mb-4';

        if (isUser) {
            messageDiv.className += ' justify-end';
            messageDiv.innerHTML = `
                <div class="bg-blue-100 text-blue-900 p-3 rounded-lg rounded-tr-none shadow-md break-words max-w-[85%]">
                    <p class="text-sm">${text}</p>
                </div>
            `;
        } else {
            messageDiv.innerHTML = `
                <div class="bg-blue-600 text-white p-3 rounded-lg rounded-tl-none shadow-md break-words max-w-[85%]">
                    <p class="text-sm">${text.replace(/\n/g, '<br>')}</p>
                </div>
            `;
        }

        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Función para procesar la entrada del usuario
    function processUserInput() {
        const userInput = chatInput.value.trim().toLowerCase();
        if (userInput === '') return;

        // Agregar mensaje del usuario
        addMessage(chatInput.value, true);

        // Limpiar el input
        chatInput.value = '';

        // Buscar respuesta
        let botResponse = defaultResponse;

        // Verificar si alguna palabra clave está en la entrada del usuario
        for (const keyword in responses) {
            if (userInput.includes(keyword)) {
                botResponse = responses[keyword];
                break;
            }
        }

        // Agregar respuesta del bot después de un pequeño retraso
        setTimeout(() => {
            addMessage(botResponse);
        }, 500);
    }

    // Event listeners
    chatOpenButton.addEventListener('click', openChat);
    chatCloseButton.addEventListener('click', closeChat);

    chatSendButton.addEventListener('click', processUserInput);

    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            processUserInput();
        }
    });
});
</script>
