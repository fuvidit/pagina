{{-- Chat Widget Component --}}
<div id="chat-widget-container" class="fixed bottom-[-12px] right-[5%] z-50 w-[8%] transition-opacity duration-300">
    {{-- Chat Button (El GIF original que sirve como disparador) --}}
    <img id="chat-bot-image" src="{{ asset('images/hfmchatbot.gif') }}" height="20px" class="transition-all duration-300 transform cursor-pointer hover:scale-110">

    {{--
      Ventana del Chat (MODIFICADA)
      - Contiene el video (izquierda) y el chat (derecha).
    --}}
    <div id="chat-widget" class="fixed z-50 flex flex-row items-stretch transition-all duration-300 origin-bottom-right transform scale-0 opacity-0 bottom-5 right-5" style="height: 450px; max-height: 80vh;">

        <div id="chat-avatar-container" class="flex items-center justify-center w-64 overflow-hidden rounded-l-2xl">
            {{--
              El video se reproducirá aquí.
              Comienza con un video 'idle.mp4' en bucle.
              Asegúrate de crear esta carpeta y video en: public/videos/avatar/idle.mp4
            --}}
            <video id="chat-avatar-video" src="{{ asset('videos/avatar/idle.mp4') }}" autoplay loop playsinline volume="0.5" class="object-cover w-full h-full"></video>
        </div>

        <div id="chat-text-area" class="flex flex-col bg-white shadow-xl w-80 md:w-96 rounded-r-2xl">

            {{-- Header (Solo 'rounded-tr-2xl') --}}
            <div class="flex items-center justify-between p-4 text-white bg-blue-600 rounded-tr-2xl">
                <div class="flex items-center space-x-2">
                    <h3 class="text-lg font-bold">Fuvi</h3>
                </div>
                <button id="chat-close-button" class="bg-white text-blue-600 p-1.5 rounded-full hover:bg-blue-100 transition transform hover:rotate-90 duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Mensajes --}}
            <div id="chat-messages" class="flex-grow p-4 space-y-4 overflow-y-auto bg-blue-50" style="min-height: 250px; max-width: 100%;">
                <div class="flex items-start mb-4">
                    <div class="bg-blue-600 text-white p-3 rounded-lg rounded-tl-none shadow-md break-words max-w-[85%]">
                        <p class="text-sm">¡Hola! Soy Fuvi. ¿En qué puedo ayudarte hoy?</p>
                    </div>
                </div>
            </div>

            {{-- Input (Solo 'rounded-br-2xl') --}}
            <div class="p-4 bg-white border-t border-gray-200 rounded-br-2xl">
                <div class="flex items-center space-x-2">
                    <input type="text" id="chat-input" placeholder="Escribe tu mensaje..." class="flex-grow px-4 py-2 text-sm border border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button id="chat-send-button" class="p-2 text-white transition bg-blue-600 rounded-full hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // --- Lógica para ocultar el chat en el footer (Sin cambios) ---
        const chatWidgetContainer = document.getElementById('chat-widget-container');
        const footer = document.getElementById('footer');
        if (chatWidgetContainer && footer) {
            window.addEventListener('scroll', function() {
                const footerRect = footer.getBoundingClientRect();
                const chatWidgetContainerRect = chatWidgetContainer.getBoundingClientRect();
                const threshold = 100;

                if (chatWidgetContainerRect.bottom > (footerRect.top - threshold)) {
                    chatWidgetContainer.classList.add('opacity-0', 'pointer-events-none');
                } else {
                    chatWidgetContainer.classList.remove('opacity-0', 'pointer-events-none');
                }
            });
        }
        // --- FIN Lógica para ocultar el chat en el footer ---


        // --- Lógica del Chatbot (MODIFICADA) ---
        const chatCloseButton = document.getElementById('chat-close-button');
        const chatWindow = document.getElementById('chat-widget');
        const chatMessages = document.getElementById('chat-messages');
        const chatInput = document.getElementById('chat-input');
        const chatSendButton = document.getElementById('chat-send-button');
        const chatBotImage = document.getElementById('chat-bot-image');

        // --- NUEVO: Elementos de video ---
        const avatarVideo = document.getElementById('chat-avatar-video');
        // Define tu video "idle" (en espera). El avatar mostrará esto en bucle.
        const idleVideoSrc = '{{ asset('images/hfmchatbot.mp4') }}';
        // Define un video para el saludo inicial
        const saludoVideoSrc = '{{ asset('images/hfmchatbot.mp4') }}';

        // --- MODIFICADO: Respuestas predefinidas ---
        // Ahora cada respuesta es un objeto { text: '...', video: '...' }
        // DEBES CREAR UN VIDEO PARA CADA RESPUESTA y actualizar la ruta.
        const responses = {
            'hola' : {
                text: '¡Hola, soy Fuvi! ¿Cómo puedo ayudarte hoy?',
                video: '{{ asset('images/videos/Soy Fuvi.mp4') }}'
            },
            'buenas' : {
                text: '¡Hola! ¿Cómo puedo ayudarte hoy?',
                video: '{{ asset('images/videos/Soy Fuvi.mp4') }}'
            },
            'adios' : {
                text: '¡Hasta luego! Que tengas un buen día.',
                video: '{{ asset('images/videos/Fuvi despedida.mp4') }}'
            },
            'adiós' : {
                text: '¡Hasta luego! Que tengas un buen día.',
                video: '{{ asset('images/videos/Fuvi despedida.mp4') }}'
            },
            'chao' : {
                text: '¡Hasta luego! Que tengas un buen día.',
                video: '{{ asset('images/videos/Fuvi despedida.mp4') }}'
            },
            'significa' : {
                text: 'Las siglas de la FUVIDIT significan Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte.',
                video: '{{ asset('videos/avatar/significado.mp4') }}'
            },
            'objetivo' : {
                text: 'Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel.\n\nAsí como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.',
                video: '{{ asset('images/videos/FUVIDIT_ Innovación Transporte.mp4') }}'
            },
            'objetivos' : {
                text: 'Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel.\n\nAsí como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.',
                video: '{{ asset('images/videos/FUVIDIT_ Innovación Transporte.mp4') }}'
            },
            'presidente' : {
                text: 'Mediante la Gaceta Oficial Nro. 42.346, el 25 de marzo de 2022 se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
                video: '{{ asset('images/videos/Nombramiento FUVIDIT.mp4') }}'
            },
            'presidenta' : {
                text: 'Mediante la Gaceta Oficial Nro. 42.346, el 25 de marzo de 2022 se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
                video: '{{ asset('images/videos/Nombramiento FUVIDIT.mp4') }}'
            },
            'preside' : {
                text: 'Mediante la Gaceta Oficial Nro. 42.346, el 25 de marzo de 2022 se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
                video: '{{ asset('images/videos/Nombramiento FUVIDIT.mp4') }}'
            },
            'funcion' : {
                text: 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
                video: '{{ asset('images/videos/funcion.mp4') }}'
            },
            'visión' : {
                text: 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.',
                video: '{{ asset('videos/avatar/vision.mp4') }}'
            },
            'ubicacion' : {
                text: 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
                video: '{{ asset('videos/avatar/ubicacion.mp4') }}'
            },
            'contacto' : {
                text: 'Teléfono: (0212) 235 06 40\nCorreo electrónico: despfuvidit@gmail.com',
                video: '{{ asset('videos/avatar/contacto.mp4') }}'
            },
            'creacion' : {
                text: 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
                video: '{{ asset('videos/avatar/creacion.mp4') }}'
            },
            'fuvidit' : {
                text: 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional...',
                video: '{{ asset('images/videos/funcion.mp4') }}'
            },
            'multimodal' : {
                text: 'El transporte multimodal es la operación logística que implica la utilización de dos o más modos de transporte diferentes (terrestre, acuático, aéreo, ferroviario) para trasladar pasajeros y mercancías desde su origen hasta su destino final.',
                video: '{{ asset('images/videos/transporte multimodal.mp4') }}'
            },
            'gmtv' : {
                text: 'La Gran Misión Transporte Venezuela es una iniciativa gubernamental que busca desarrollar y mejorar el sistema de transporte público del país en sus diferentes modalidades (terrestre, ferroviario, acuático y aéreo). Sus objetivos incluyen la mejora de la infraestructura, el apoyo a los transportistas a través de financiamiento y repuestos, y la optimización de la movilidad para el beneficio de la población.',
                video: '{{ asset('images/videos/gmtv.mp4') }}'
            },
            'gran misión transporte venezuela' : {
                text: 'La Gran Misión Transporte Venezuela es una iniciativa gubernamental que busca desarrollar y mejorar el sistema de transporte público del país en sus diferentes modalidades (terrestre, ferroviario, acuático y aéreo). Sus objetivos incluyen la mejora de la infraestructura, el apoyo a los transportistas a través de financiamiento y repuestos, y la optimización de la movilidad para el beneficio de la población.',
                video: '{{ asset('images/videos/gmtv.mp4') }}'
            },
            'gran mision transporte venezuela' : {
                text: 'La Gran Misión Transporte Venezuela es una iniciativa gubernamental que busca desarrollar y mejorar el sistema de transporte público del país en sus diferentes modalidades (terrestre, ferroviario, acuático y aéreo). Sus objetivos incluyen la mejora de la infraestructura, el apoyo a los transportistas a través de financiamiento y repuestos, y la optimización de la movilidad para el beneficio de la población.',
                video: '{{ asset('images/videos/gmtv.mp4') }}'
            },
            'taxonomía' : {
                text: 'La Taxnonomía se divide de la siguiente forma:\n\nTAXONOMÍA: MEDIO O FIN\n\nSEGÚN SU ORIGEN, se orienta a: RED UNIVERSITARIA, FUVIDIT, TALLER ADENTRO\n\nLINEA DE INVESTIGACIÓN FUVIDIT comprende: MEDIOS FIJOS, MEDIOS MÓVILES, SISTEMAS DE CONTROL, INGENIERÍA INVERSA, CONCIENCIA DEL TRANSPORTE MULTIMODAL, CONCIENCIA PARA EL DESARROLLO DE TECNOLOGÍA AMBIENTAL\n\nTIPO DE INVESTIGACIÓN puede ser: ACADÉMICA, APLICADA, SOCIO PRODUCTIVA, MPPT\n\nPARTICIPACIÓN según sector: PÚBLICA, PRIVADA, MIXTA\n\nCADENCIA INVESTIGATIVA por la frecuencia o duración del proyecto: RESPUESTA INMEDIATA, CORTO PLAZO, MEDIANO PLAZO, LARGO PLAZO\n\nTIPO DE DESARROLLO enfocado a: INGENIERÍA INVERSA, REINGENIERÍA, INVESTIGACIÓN CIENTÍFICA, INNOVACIÓN TECNOLÓGICA\n\nFIN DE LA INVESTIGACIÓN dirigida a: MANTENIMIENTO, REPARACIÓN, SUSTITUCIÓN, CONSTRUCCIÓN, INNOVACIÓN, GENERACIÓN DE CONOCIMIENTO, INVESTIGACIÓN Y DESARROLLO\n\nTIPO DE ACTIVIDAD dirigida a: EDUCATIVA, DESARROLLO, TRANSFERENCIA TECNOLÓGICA',
                video: '{{ asset('images/videos/taxonomia.mp4') }}'
            },
            'taxonomia' : {
                text: 'La Taxnonomía se divide de la siguiente forma:\n\nTAXONOMÍA: MEDIO O FIN\n\nSEGÚN SU ORIGEN, se orienta a: RED UNIVERSITARIA, FUVIDIT, TALLER ADENTRO\n\nLINEA DE INVESTIGACIÓN FUVIDIT comprende: MEDIOS FIJOS, MEDIOS MÓVILES, SISTEMAS DE CONTROL, INGENIERÍA INVERSA, CONCIENCIA DEL TRANSPORTE MULTIMODAL, CONCIENCIA PARA EL DESARROLLO DE TECNOLOGÍA AMBIENTAL\n\nTIPO DE INVESTIGACIÓN puede ser: ACADÉMICA, APLICADA, SOCIO PRODUCTIVA, MPPT\n\nPARTICIPACIÓN según sector: PÚBLICA, PRIVADA, MIXTA\n\nCADENCIA INVESTIGATIVA por la frecuencia o duración del proyecto: RESPUESTA INMEDIATA, CORTO PLAZO, MEDIANO PLAZO, LARGO PLAZO\n\nTIPO DE DESARROLLO enfocado a: INGENIERÍA INVERSA, REINGENIERÍA, INVESTIGACIÓN CIENTÍFICA, INNOVACIÓN TECNOLÓGICA\n\nFIN DE LA INVESTIGACIÓN dirigida a: MANTENIMIENTO, REPARACIÓN, SUSTITUCIÓN, CONSTRUCCIÓN, INNOVACIÓN, GENERACIÓN DE CONOCIMIENTO, INVESTIGACIÓN Y DESARROLLO\n\nTIPO DE ACTIVIDAD dirigida a: EDUCATIVA, DESARROLLO, TRANSFERENCIA TECNOLÓGICA',
                video: '{{ asset('images/videos/taxonomia.mp4') }}'
            },
            'mppt' : {
                text: 'El Ministerio del Poder Popular para el Transporte es una institución gubernamental encargada de planificar, desarrollar y gestionar las políticas públicas en materia de transporte terrestre, aéreo y acuático, así como la infraestructura vial y los servicios relacionados en el país. Se encarga de garantizar la movilidad, la conectividad, la seguridad y la eficiencia en el sistema de transporte nacional para el bienestar de la población.',
                video: '{{ asset('images/videos/mppt.mp4') }}'
            },
            'ministerio del poder popular para el transporte' : {
                text: 'El Ministerio del Poder Popular para el Transporte es una institución gubernamental encargada de planificar, desarrollar y gestionar las políticas públicas en materia de transporte terrestre, aéreo y acuático, así como la infraestructura vial y los servicios relacionados en el país. Se encarga de garantizar la movilidad, la conectividad, la seguridad y la eficiencia en el sistema de transporte nacional para el bienestar de la población.',
                video: '{{ asset('images/videos/mppt.mp4') }}'
            },
            'ministerio de transporte' : {
                text: 'El Ministerio del Poder Popular para el Transporte es una institución gubernamental encargada de planificar, desarrollar y gestionar las políticas públicas en materia de transporte terrestre, aéreo y acuático, así como la infraestructura vial y los servicios relacionados en el país. Se encarga de garantizar la movilidad, la conectividad, la seguridad y la eficiencia en el sistema de transporte nacional para el bienestar de la población.',
                video: '{{ asset('images/videos/mppt.mp4') }}'
            },
            'reingenieria' : {
                text: 'La ingeniería inversa es el proceso de análisis que va hacia atrás, desarmando o estudiando un producto terminado (físico o digital) para comprender su diseño, estructura y funcionamiento. Su meta es descubrir cómo se hizo algo. En contraste, la reingeniería es un proceso de modificación que va hacia adelante, tomando un sistema o proceso existente, a menudo después de haberlo entendido (posiblemente usando ingeniería inversa), para rediseñarlo radicalmente y lograr una mejora significativa en eficiencia, calidad o funcionalidad. En esencia, una busca entender y la otra busca mejorar y transformar.',
                video: '{{ asset('images/videos/reingenieria.mp4') }}'
            },
            'reingeniería' : {
                text: 'La ingeniería inversa es el proceso de análisis que va hacia atrás, desarmando o estudiando un producto terminado (físico o digital) para comprender su diseño, estructura y funcionamiento. Su meta es descubrir cómo se hizo algo. En contraste, la reingeniería es un proceso de modificación que va hacia adelante, tomando un sistema o proceso existente, a menudo después de haberlo entendido (posiblemente usando ingeniería inversa), para rediseñarlo radicalmente y lograr una mejora significativa en eficiencia, calidad o funcionalidad. En esencia, una busca entender y la otra busca mejorar y transformar.',
                video: '{{ asset('images/videos/reingenieria.mp4') }}'
            },
            'ingeniería inversa' : {
                text: 'La ingeniería inversa es el proceso de análisis que va hacia atrás, desarmando o estudiando un producto terminado (físico o digital) para comprender su diseño, estructura y funcionamiento. Su meta es descubrir cómo se hizo algo. En contraste, la reingeniería es un proceso de modificación que va hacia adelante, tomando un sistema o proceso existente, a menudo después de haberlo entendido (posiblemente usando ingeniería inversa), para rediseñarlo radicalmente y lograr una mejora significativa en eficiencia, calidad o funcionalidad. En esencia, una busca entender y la otra busca mejorar y transformar.',
                video: '{{ asset('images/videos/reingenieria.mp4') }}'
            },
            'ingenieria inversa' : {
                text: 'La ingeniería inversa es el proceso de análisis que va hacia atrás, desarmando o estudiando un producto terminado (físico o digital) para comprender su diseño, estructura y funcionamiento. Su meta es descubrir cómo se hizo algo. En contraste, la reingeniería es un proceso de modificación que va hacia adelante, tomando un sistema o proceso existente, a menudo después de haberlo entendido (posiblemente usando ingeniería inversa), para rediseñarlo radicalmente y lograr una mejora significativa en eficiencia, calidad o funcionalidad. En esencia, una busca entender y la otra busca mejorar y transformar.',
                video: '{{ asset('images/videos/reingenieria.mp4') }}'
            },
            'humberto fernandez moran' : {
                text:'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
                video: '{{ asset('images/videos/hfm.mp4') }}'
            },
            'humberto fernández morán' : {
                text:'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
                video: '{{ asset('images/videos/hfm.mp4') }}'
            },
            'humberto fernandez morán' : {
                text:'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
                video: '{{ asset('images/videos/hfm.mp4') }}'
            },
            'humberto fernández moran' : {
                text:'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
                video: '{{ asset('images/videos/hfm.mp4') }}'
            },
            'mision' : {
                text:'La misión de la FUVIDIT es promover y desarrollar actividades de investigación, desarrollo e innovación en el sector transporte, contribuyendo al avance científico y tecnológico del país.',
                video: '{{ asset('images/videos/mision.mp4') }}'
            },
            'misión' : {
                text:'La misión de la FUVIDIT es promover y desarrollar actividades de investigación, desarrollo e innovación en el sector transporte, contribuyendo al avance científico y tecnológico del país.',
                video: '{{ asset('images/videos/mision.mp4') }}'
            },
            'valores' : {
                text:'Nuestros valores se centran en la excelencia, la innovación, el compromiso social, la ética y la transparencia en todas nuestras actividades.',
                video: '{{ asset('images/videos/valores.mp4') }}'
            },
            'proyectos' : {
                text:'La FUVIDIT desarrolla proyectos de investigación e innovación en diversas áreas del transporte, buscando soluciones sostenibles y eficientes. Puedes encontrar más detalles en la sección de "Observatorio" o "Prensa" de nuestra página web.',
                video: '{{ asset('images/videos/proyectos.mp4') }}'
            },
            'quienes somos' : {
                text:'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
                video: '{{ asset('images/videos/qs.mp4') }}'
            },
            'quiénes somos' : {
                text:'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
                video: '{{ asset('images/videos/qs.mp4') }}'
            },
            'ministro de transporte' : {
                text:'El ministro de Transporte de Venezuela, responsable de la Gran Misión Transporte, es Ramón Velásquez Araguayán.',
                video: '{{ asset('images/videos/mintrans.mp4') }}'
            },
            'ministro del transporte' : {
                text:'El ministro de Transporte de Venezuela, responsable de la Gran Misión Transporte, es Ramón Velásquez Araguayán.',
                video: '{{ asset('images/videos/mintrans.mp4') }}'
            },
            'líneas de investigación' : {
                text:'Medios Móviles, Medios Fijos, Sistemas de Control, Ingeniería Inversa, Conciencia del Transporte Multimodal y Conciencia para el Desarrollo de Tecnología Ambiental.',
                video: '{{ asset('images/videos/lineas.mp4') }}'
            },
            'lineas de investigacion' : {
                text:'Medios Móviles, Medios Fijos, Sistemas de Control, Ingeniería Inversa, Conciencia del Transporte Multimodal y Conciencia para el Desarrollo de Tecnología Ambiental.',
                video: '{{ asset('images/videos/lineas.mp4') }}'
            },


            // ... Añade aquí TODAS tus otras respuestas con el formato { text: '...', video: '...' }
        };

        // --- MODIFICADO: Respuesta por defecto ---
        const defaultResponse = {
            text: 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "objetivo", "contacto", "ubicación", "presidente" o "creación"?',
            video: '{{ asset('images/videos/noresponse.mp4') }}' // Video para "no entendí"
        };

        // --- NUEVO: Función para reproducir el video del avatar ---
        function playAvatarVideo(videoSrc) {
            if (!avatarVideo) return; // Salir si el video no existe

            // 1. Asignar la nueva fuente de video
            avatarVideo.src = videoSrc;

            // 2. Asegurarse de que no esté en bucle (solo el 'idle' lo está)
            avatarVideo.loop = false;

            // 3. Reproducir el video
            avatarVideo.play().catch(e => console.error("Error al reproducir video:", e)); // Capturar errores

            // 4. NUEVO: Event listener para cuando el video de respuesta termine
            avatarVideo.onended = function() {
                // Cuando termine, volver al video 'idle' en bucle
                avatarVideo.src = idleVideoSrc;
                avatarVideo.loop = true;
                avatarVideo.play().catch(e => console.error("Error al reproducir video idle:", e));
                avatarVideo.onended = null; // Limpiar el listener para que no se ejecute en el idle
            };
        }


        // --- MODIFICADO: Función para animar la apertura del chat ---
        function openChat() {
            chatWidgetContainer.classList.remove('opacity-0', 'pointer-events-none');
            chatWindow.classList.remove('hidden', 'scale-0', 'opacity-0');
            chatWindow.classList.add('scale-100', 'opacity-100');
            chatBotImage.classList.add('hidden');

            // --- NUEVO: Reproducir video de saludo al abrir ---
            // (Opcional: puedes cambiarlo a idleVideoSrc si prefieres)
            playAvatarVideo(saludoVideoSrc);
        }

        // --- MODIFICADO: Función para animar el cierre del chat ---
        function closeChat() {
            chatWindow.classList.remove('scale-100', 'opacity-100');
            chatWindow.classList.add('scale-0', 'opacity-0');
            chatBotImage.classList.remove('hidden');

            // --- NUEVO: Pausar el video al cerrar ---
            if (avatarVideo) {
                avatarVideo.pause();
                avatarVideo.src = ''; // Limpiar la fuente para liberar recursos
            }
        }

        // --- MODIFICADO: Función para agregar un mensaje al chat ---
        // (Sin cambios en la lógica, solo para asegurar compatibilidad)
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

        // --- MODIFICADO: Función para procesar la entrada del usuario ---
        function processUserInput() {
            const userInput = chatInput.value.trim().toLowerCase();
            if (userInput === '') return;

            addMessage(chatInput.value, true);
            chatInput.value = '';

            // Buscar respuesta
            let botResponse = defaultResponse; // Ahora es un objeto {text, video}

            // Verificar si alguna palabra clave está en la entrada del usuario
            for (const keyword in responses) {
                if (userInput.includes(keyword)) {
                    botResponse = responses[keyword]; // botResponse es el objeto {text, video}
                    break;
                }
            }

            // Agregar respuesta del bot después de un pequeño retraso
            setTimeout(() => {
                // 1. Añadir el mensaje de TEXTO
                addMessage(botResponse.text);

                // 2. Reproducir el VIDEO asociado
                playAvatarVideo(botResponse.video);
            }, 500);
        }

        // Event listeners (Sin cambios)
        chatBotImage.addEventListener('click', openChat);
        chatCloseButton.addEventListener('click', closeChat);
        chatSendButton.addEventListener('click', processUserInput);
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                processUserInput();
            }
        });
        // --- FIN Lógica del Chatbot ---

        // Lógica para reproducir el GIF (Sin cambios)
        const gifSrc = '{{ asset('images/hfmchatbot.gif') }}';
        function playGif() {
            chatBotImage.src = gifSrc + '?' + new Date().getTime();
        }
        playGif();
        setInterval(playGif, 20000);
    });
</script>
