{{-- Chat Widget Component --}}
<div id="chat-widget-container" class="fixed bottom-[-12px] right-[5%] z-50 w-[8%] transition-opacity duration-300">
    {{-- Chat Button --}}
    <img id="chat-bot-image" src="{{ asset('images/hfmchatbot.gif') }}" height="20px" class="cursor-pointer transform hover:scale-110 transition-all duration-300">

    {{-- Chat Window (Este también tiene sus propias transiciones que están bien) --}}
    <div id="chat-widget" class="fixed bottom-5 right-5 w-80 md:w-96 bg-white rounded-2xl shadow-xl transform scale-0 opacity-0 origin-bottom-right transition-all duration-300 z-50 flex flex-col" style="height: 450px; max-height: 80vh;">
        {{-- Resto del contenido de la ventana del chat --}}
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

        <div id="chat-messages" class="flex-grow p-4 space-y-4 overflow-y-auto bg-blue-50" style="min-height: 250px; max-width: 100%;">
            <div class="flex items-start mb-4">
                <div class="bg-blue-600 text-white p-3 rounded-lg rounded-tl-none shadow-md break-words max-w-[85%]">
                    <p class="text-sm">¡Hola! Soy Fuvi. ¿En qué puedo ayudarte hoy?</p>
                </div>
            </div>
        </div>

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
        // --- Lógica para ocultar el chat en el footer ---
        const chatWidgetContainer = document.getElementById('chat-widget-container'); 
        const footer = document.getElementById('footer'); 

        if (chatWidgetContainer && footer) {
            window.addEventListener('scroll', function() {
                const footerRect = footer.getBoundingClientRect();
                const chatWidgetContainerRect = chatWidgetContainer.getBoundingClientRect();

                // Un valor positivo significa que se oculta X píxeles antes de que el borde inferior del chat
                // toque el borde superior del footer. Ajusta este valor según necesites.
                const threshold = 100; 

                if (chatWidgetContainerRect.bottom > (footerRect.top - threshold)) {
                    // Si el chat se solapa con el footer o está muy cerca, lo oculta suavemente
                    // y lo hace no interactuable.
                    chatWidgetContainer.classList.add('opacity-0', 'pointer-events-none'); 
                } else {
                    // Si no está cerca del footer, lo muestra suavemente y lo hace interactuable.
                    chatWidgetContainer.classList.remove('opacity-0', 'pointer-events-none'); 
                }
            });
        }
        // --- FIN Lógica para ocultar el chat en el footer ---


        // --- Lógica del Chatbot ---
        const chatCloseButton = document.getElementById('chat-close-button');
        const chatWindow = document.getElementById('chat-widget');
        const chatMessages = document.getElementById('chat-messages');
        const chatInput = document.getElementById('chat-input');
        const chatSendButton = document.getElementById('chat-send-button');
        const chatBotImage = document.getElementById('chat-bot-image');

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
            'presidente' : 'Mediante la Gaceta Oficial Nro. 42.346, el 25 de marzo de 2022 se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
            'presidenta' : 'Mediante la Gaceta Oficial Nro. 42.346, el 25 de marzo de 2022 se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
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
            'hace' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
            'que hace' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
            'encargan' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
            'encarga' : 'La FUVIDIT se encarga de gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional, a través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.',
            'ministro de transporte' : 'Ramón Celestino Velásquez Araguayán',
            'primer' : 'El primer presidente de la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT) fue Ludwig Antonio Vera Rojas, nombrado en condición de Encargado. Este nombramiento se realizó mediante el Decreto N° 3.910. ',
            'humberto fernandez moran' : 'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernández morán' : 'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernandez morán' : 'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernández moran' : 'Humberto Fernández-Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'ivic' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'Instituto Venezolano de Investigaciones Científicas' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'instituto venezolano de investigaciones cientificas' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'Gabriela Servilia Jiménez Ramírez' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'vicepresidenta' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'gabriela sevilia jimenez ramirez' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'mision' : 'La misión de la FUVIDIT es promover y desarrollar actividades de investigación, desarrollo e innovación en el sector transporte, contribuyendo al avance científico y tecnológico del país.',
            'misión' : 'La misión de la FUVIDIT es promover y desarrollar actividades de investigación, desarrollo e innovación en el sector transporte, contribuyendo al avance científico y tecnológico del país.',
            'valores' : 'Nuestros valores se centran en la excelencia, la innovación, el compromiso social, la ética y la transparencia en todas nuestras actividades.',
            'proyectos' : 'La FUVIDIT desarrolla proyectos de investigación e innovación en diversas áreas del transporte, buscando soluciones sostenibles y eficientes. Puedes encontrar más detalles en la sección de "Observatorio" o "Prensa" de nuestra página web.',
            'noticias' : 'Puedes encontrar las últimas noticias y comunicados de prensa en la sección de "Prensa" de nuestra página web.',
            'eventos' : 'Para información sobre próximos eventos, talleres o conferencias, te invitamos a revisar nuestra sección de "Prensa" o seguirnos en nuestras redes sociales.',
            'quienes somos' : 'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
            'quiénes somos' : 'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
            'humberto fernandez moran' : 'Humberto Fernández Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernández morán' : 'Humberto Fernández Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernandez morán' : 'Humberto Fernández Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'humberto fernández moran' : 'Humberto Fernández Morán fue un médico y reconocido científico venezolano, considerado uno de los más importantes del siglo XX. Nació en Concepción, Zulia, el 18 de febrero de 1924 y falleció en Estocolmo, Suecia, el 17 de marzo de 1999.',
            'ivic' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'Instituto Venezolano de Investigaciones Científicas' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'instituto venezolano de investigaciones cientificas' : 'El Instituto Venezolano de Investigaciones Científicas (IVIC) es un organismo autónomo adscrito al Ministerio del Poder Popular para Ciencia y Tecnología de la República Bolivariana de Venezuela. Se considera el principal instituto de investigación pública en Venezuela y es un referente en la investigación científica en el país.',
            'Gabriela Servilia Jiménez Ramírez' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'vicepresidenta' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'gabriela sevilia jimenez ramirez' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'dra gabriela jimenez' : 'La Dra. Gabriela Servilia Jiménez Ramírez es una destacada bióloga y política venezolana que ocupa importantes cargos en el gobierno actual.\nDesde el 20 de junio de 2022, se desempeña como Vicepresidenta Sectorial de Ciencia, Tecnología, Educación y Salud de Venezuela. Además, es la Ministra del Poder Popular para Ciencia y Tecnología desde el 6 de junio de 2019.\nTrayectoria y formación:\n- Es Licenciada y Magíster en Biología por la Universidad Central de Venezuela (UCV).\n- Ha ocupado otros cargos relevantes, como presidenta encargada de la Corporación para el Desarrollo Científico y Tecnológico (Codecyt).\n- En enero de 2020, fue designada presidenta de la Compañía Anónima Nacional Teléfonos de Venezuela (CANTV).\n- Ha impulsado iniciativas como la creación del Consejo Nacional de Ciberseguridad y el desarrollo de software libre en Venezuela.\n- Ha sido una activa promotora de la participación de la mujer en la ciencia, destacando que un alto porcentaje de proyectos científicos financiados en Venezuela son liderados por mujeres.\n- La Dra. Jiménez Ramírez ha enfatizado la importancia de la ciencia para el desarrollo del país, la soberanía nacional y la mejora de la calidad de vida de los venezolanos, abordando áreas como la salud, la educación, la ciberseguridad, la nanotecnología y la biotecnología.',
            'que es la fuvidit' : 'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
            'qué es la fuvidit' : 'Somos la Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte (FUVIDIT). Puedes conocer más sobre nosotros en la sección "Nosotros" de nuestra página web.',
            'Quien es el ministro de transporte ' : 'El ministro de Transporte de Venezuela, responsable de la Gran Misión Transporte, es Ramón Velásquez Araguayán.',
            'Quien es el ministro de educación universitaria ' : 'El ministro de Educación Universitaria es Ricardo Sánchez. Es quien está a cargo del Ministerio del Poder Popular para la Educación Universitaria en Venezuela.',
            'Que es el transporte multimodal' : ' El transporte multimodal se refiere a la combinación de diferentes modos de transporte (como carretera, marítimo, aéreo o ferroviario) para el traslado de mercancías, bajo un único contrato y un único operador logístico. Este enfoque busca optimizar la cadena de suministro, aprovechando las ventajas de cada modo para mejorar la eficiencia, reducir costos y tiempos de tránsito, y asegurar la seguridad de la carga. ',
            'Que es la gran misión transporte Venezuela' : 'La Gran Misión Transporte Venezuela es una iniciativa del gobierno venezolano que busca mejorar y transformar el sector transporte del país, tanto terrestre, aéreo, marítimo como ferroviario, ofreciendo un servicio digno, seguro, de calidad, confortable y sostenible para todos los ciudadanos. ',
            'Cuales son entes adscritos a la Gran misión transporte Venezuela' : 'Los entes adscritos a la Gran Misión Transporte Venezuela son principalmente aquellos que están bajo la jurisdicción del Ministerio del Poder Popular para el Transporte (MPPT) y que contribuyen a la ejecución de sus planes y proyectos. Entre ellos se encuentran el Sistema Integral de Transporte Superficial (SITSSA), el Fondo Nacional de Transporte Urbano (FONTUR), la Empresa Nacional de Mantenimiento Vial (ENVIAL), la Corporación Nacional de Logística y Transporte de Carga (CORPOLOGÍSTICA), el Sistema Autónomo de Vialidad Agrícola (SAVA), entre otros. ',
            'Que es la Unetrans' : 'La Universidad Nacional Experimental del Transporte, nace en febrero de 2019 y a ella se le adscribe el Instituto Universitario Tecnológico ”Federico Rivero Palacios”, casa de estudio con una tradición histórica de más de medio siglo, de reconocido prestigio a nivel nacional e internacional, conformada por una pujante comunidad académica integrada por más de 1.200 estudiantes matriculados, 220 profesores y 200 empleados administrativos y obreros, que permiten prestar servicio de educación universitaria de calidad a todas las regiones del estado Bolivariano de Miranda, constituyéndose en una de las universidades técnico-científica más importante del país.', 
            'Cuales son las líneas de investigación de la FUVIDIT' : 'Medios Móviles, Medios Fijos, Sistemas de Control, Ingeniería Inversa, Conciencia del Transporte Multimodal y Conciencia para el Desarrollo de Tecnología Ambiental', 
            'Cuales son los proyectos más emblemáticos de la FUVIDIT' : '', 
            
            
        };

        const defaultResponse = 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "objetivo", "contacto", "ubicación", "presidente" o "creación"?';

        // Función para animar la apertura del chat
        function openChat() {
            // Nota: Aquí se maneja la visibilidad de la ventana del chat (no del contenedor principal).
            // Si el contenedor principal fue ocultado por el scroll, al abrir el chat,
            // esto lo hará visible de nuevo.
            chatWidgetContainer.classList.remove('opacity-0', 'pointer-events-none'); // Asegura que el contenedor esté visible y activo
            chatWindow.classList.remove('hidden', 'scale-0', 'opacity-0');
            chatWindow.classList.add('scale-100', 'opacity-100');
            // Ocultar el GIF cuando el chat está abierto
            chatBotImage.classList.add('hidden');
        }

        // Función para animar el cierre del chat
        function closeChat() {
            chatWindow.classList.remove('scale-100', 'opacity-100');
            chatWindow.classList.add('scale-0', 'opacity-0');
            // Mostrar el GIF cuando el chat está cerrado
            chatBotImage.classList.remove('hidden');
            // Aquí NO ocultamos el chatWidgetContainer, ya que su visibilidad la controla el scroll.
            // Si el scroll está cerca del footer, se ocultará automáticamente.
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
        chatBotImage.addEventListener('click', openChat);
        chatCloseButton.addEventListener('click', closeChat);

        chatSendButton.addEventListener('click', processUserInput);

        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                processUserInput();
            }
        });
        // --- FIN Lógica del Chatbot ---

        // Lógica para reproducir el GIF cada 20 segundos
        const gifSrc = '{{ asset('images/hfmchatbot.gif') }}';

        function playGif() {
            // Al asignar la misma URL, el navegador reinicia la reproducción del GIF
            chatBotImage.src = gifSrc + '?' + new Date().getTime(); // Añadir un timestamp para forzar la recarga
        }

        // Reproducir el GIF inicialmente y luego cada 20 segundos
        playGif(); // Reproducir al cargar la página
        setInterval(playGif, 20000); // Reproducir cada 20 segundos (20000 ms)
    });
</script>