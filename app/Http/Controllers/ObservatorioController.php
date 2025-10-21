<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObservatorioController extends Controller
{
    public function indicadores(){
        $chartData = [
            'grafico1' => [
                'labels' => ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                'data' => [12, 19, 3, 5, 2, 3],
                'title' => 'Indicador 1: Tráfico Mensual (Ej. Barras)'
            ],
            'grafico2' => [
                'labels' => ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
                'data' => [65, 59, 80, 81],
                'title' => 'Indicador 2: Eficiencia Semanal (Ej. Líneas)'
            ],
            'grafico3' => [
                'labels' => ['Tipo A', 'Tipo B', 'Tipo C'],
                'data' => [300, 50, 100],
                'title' => 'Indicador 3: Distribución (Ej. Torta)'
            ],
            'grafico4' => [
                'labels' => ['Velocidad', 'Seguridad', 'Costo', 'Comodidad', 'Innovación'],
                'data' => [8, 6, 7, 9, 5],
                'title' => 'Indicador 4: Evaluación Multicriterio (Ej. Radar)'
            ],
            'grafico5' => [
                'labels' => ['Completados', 'Pendientes', 'Cancelados'],
                'data' => [150, 75, 25],
                'title' => 'Indicador 5: Estado de Proyectos (Ej. Dona)'
            ],
        ];

        return view('observatorio', ['chartData' => $chartData]);
    }
}
