<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Asegúrate de importar la clase View

class ChatbotController extends Controller
{
    /**
     * Muestra la vista del widget del chatbot.
     */
    public function index(): View // Añade el método index
    {
        return view('chatbot.widget'); // Retorna la vista del widget
    }
    public function processMessage(Request $request)
    {
        $userMessage = $request->input('message');
        // Aquí podrías añadir lógica para limpiar o procesar $userMessage si es necesario
        
        $responseMessage = $this->getResponse($userMessage);
        
        return response()->json(['message' => $responseMessage]);
    }

    private function getResponse($userMessage) {
        // Definir un array de palabras clave y sus respuestas
        $responses = [
            'hola' => '¡Hola! ¿Cómo puedo ayudarte hoy?',
            'buenas' => '¡Hola! ¿Cómo puedo ayudarte hoy?', // Añadido 'buenas'
            'adios' => '¡Hasta luego! Que tengas un buen día.',
            'adiós' => '¡Hasta luego! Que tengas un buen día.',
            'chao' => '¡Hasta luego! Que tengas un buen día.', // Añadido 'chao'
            'gracias' => '¡De nada! Si necesitas algo más, no dudes en preguntar.',
            'ayuda' => 'Claro, ¿en qué necesitas ayuda?',
            'problema' => 'Lamento que estés teniendo problemas. ¿Puedes darme más detalles?',
            'informacion' => 'Claro, ¿qué tipo necesitas conocer sobre la FUVIDIT?',
            'información' => 'Claro, ¿qué tipo de información necesitas?',
            'significa' => 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',
            'significan' => 'Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte.',
            'objetivo' => 'Promover y desarrollar actividades de investigación, desarrollo e innovación que resulten en la creación de conocimiento, productos, soluciones y servicios de muy alto nivel.\n\nAsí como desarrollos innovadores que contribuyan al avance de la ciencia y la tecnología para promover el transporte. el desarrollo de la industria y del país en general, así como la soberanía nacional y las capacidades creativas tecnológicamente independientes.', // Con salto de línea
            'presidente' => 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
            'presidenta' => 'Mediante la Gaceta Oficial Nro. 42.346, se designa como presidenta de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte (FUVIDIT), a la ciudadana, Lic. Gertrudis Infante Palacios.',
            'funcion' => 'Gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.', // Con salto de línea y corregido 'hace' a 'funcion'/'función'
            'función' => 'Gestionar procesos de investigación, desarrollo e innovación de sistemas de transporte multimodo nacional e internacional.\n\nA través de una organización apegada a los principios de la nueva sociedad socialista, prestando un servicio que considere el respeto a la dignidad del ser humano y contribuya a elevar la calidad de vida de los habitantes del País.', // Con salto de línea
            'vision' => 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.', // Con salto de línea
            'visión' => 'Ser la Fundación socialista de servicio público ejemplar en el país, a través de la prestación de un servicio de investigación, desarrollo e innovación, a nivel nacional e internacional, solidario y de calidad.\n\nCon un alto grado de sensibilidad social, que impulse la soberanía tecnológica e industrial, con el fin de generar soluciones sostenibles para el sistema de transporte multimodal.', // Con salto de línea
            'ubicacion' => 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
            'ubicación' => 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
            'queda' => 'Calle Vía Centro a la Autopista Fco Fajardo con Av. Fco de Miranda, Edif Antigua sede Campamento Viveros Odebrecht, Piso Pb, Of Pb, Sector Los Dos Caminos, Caracas, Miranda, Zona Postal 1071.',
            'contacto' => 'Teléfono: (0212) 235 06 40\nCorreo electrónico: despfuvidit@gmail.com', // Con salto de línea
            'areas' => 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
            'áreas' => 'La FUVIDIT engloba los sectores Terrestres, Ferroviarios, Aéreos y Marítimos',
            'creacion' => 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
            'creación' => 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
            'creo' => 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
            'creó' => 'En febrero de 2019 se crea la Gran Misión Transporte Venezuela. En el vértice 5, que es el eje científico y académico de la gran misión, se crean dos entes: la UNETRANS (Universidad Nacional Experimental del Transporte) y la FUVIDIT (Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte).',
            'observatorio' => 'El Observatorio de Transporte Multimodal de la FUVIDIT es el área responsable de recopilar, categorizar, analizar e interpretar información con el propósito de facilitar la formulación de las políticas públicas en Investigación, Desarrollo e Innovación para el Transporte en Venezuela.',
            // Puedes añadir más respuestas aquí
        ];

        // Recorrer las palabras clave y buscar coincidencias exactas (palabra completa)
        foreach ($responses as $keyword => $response) {
            // Crear una expresión regular para buscar la palabra clave como palabra completa, ignorando mayúsculas/minúsculas
            $pattern = '/\b' . preg_quote($keyword, '/') . '\b/i'; 
            if (preg_match($pattern, $userMessage)) {
                return $response; // Retornar la respuesta correspondiente
            }
        }

        return 'Lo siento, no entiendo tu mensaje. ¿Puedes reformularlo?'; // Respuesta por defecto
    }
}