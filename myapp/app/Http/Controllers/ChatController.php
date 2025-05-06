<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    // Define tus respuestas programadas aquí
    private $responses = [
        'hola' => '¡Hola! ¿En qué puedo ayudarte?',
        'quiénes somos' => 'Somos FUVIDIT, la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte. Gestionamos proyectos para la soberanía tecnológica del transporte multimodal.',
        'fuvidit' => 'FUVIDIT es la Fundación Venezolana de Investigación, Desarrollo e Innovación para el transporte. Nuestro objetivo es impulsar la soberanía tecnológica e industrial del transporte multimodal en Venezuela.',
        'contacto' => 'Puedes encontrar nuestra información de contacto en la sección correspondiente de la página o visitarnos en nuestra sede.',
        'proyectos' => 'Desarrollamos diversos proyectos en el ámbito del transporte. ¿Te interesa alguno en particular?',
        'catálogo' => 'Nuestro catálogo de productos y servicios está disponible en la sección "Nuestro Catálogo". ¡Te invito a revisarlo!',
        'gracias' => '¡De nada! Si tienes más preguntas, no dudes en consultar.',
        'adiós' => '¡Hasta luego! Que tengas un buen día.',
        'horario' => 'Nuestro horario de atención es de Lunes a Viernes de 8:00 AM a 5:00 PM.',
        'misión' => 'Nuestra misión es impulsar la investigación, el desarrollo y la innovación tecnológica para fortalecer el sistema de transporte multimodal en Venezuela, contribuyendo al desarrollo soberano del país.',
        'visión' => 'Ser la institución líder en investigación, desarrollo e innovación para el transporte en Venezuela, reconocida por su excelencia y contribución al bienestar social y económico de la nación.',
        'servicios' => 'Ofrecemos una variedad de servicios, incluyendo asesoría técnica, desarrollo de prototipos, capacitación especializada y más. ¿Podrías especificar qué tipo de servicio te interesa?',
        'ubicación' => 'Nuestra sede principal se encuentra en Caracas. Puedes ver la ubicación exacta en el mapa de nuestra página web.',
        // Puedes añadir más palabras clave y respuestas
    ];

    private $defaultResponse = 'Lo siento, no entendí tu pregunta. ¿Podrías reformularla o preguntar sobre temas como "quiénes somos", "proyectos", "contacto", etc.?';

    public function handleMessage(Request $request)
    {
        $userMessage = Str::lower($request->input('message', ''));
        $reply = $this->defaultResponse;

        foreach ($this->responses as $keyword => $response) {
            // Comprueba si alguna de las palabras clave está contenida en el mensaje del usuario
            $normalizedKeyword = Str::ascii($keyword);
            $normalizedUserMessage = Str::ascii($userMessage);

            if (Str::contains($normalizedUserMessage, $normalizedKeyword)) {
                $reply = $response;
                break;
            }
        }

        return response()->json(['reply' => $reply]);
    }
}