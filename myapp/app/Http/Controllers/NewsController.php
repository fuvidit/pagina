<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha' => 'required|string',
        ]);

        // Manejar la subida de la imagen
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('prensa', 'public');
        }

        // Guardar los datos en la base de datos
        Noticia::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'link' => $request->link,
            'image' => $imagePath, // <-- Usando 'image'
            'fecha' => $request->fecha,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Noticia creada exitosamente');
        }

        public function index()
        {
            $noticias = Noticia::latest()->get(); // O usa paginate() si prefieres paginación
            return view('prensa', compact('noticias'));
        }

        // Mostrar el formulario de edición
        public function edit($id)
        {
            $noticia = Noticia::findOrFail($id);
            return view('noticias.editar', compact('noticia'));
        }

        // Actualizar la noticia
        public function update(Request $request, $id)
        {
            $request->validate([
                'titulo' => 'required|string|max:255',
                'fecha' => 'required|date',
                'descripcion' => 'required|string',
                'link' => 'nullable|url',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $noticia = Noticia::findOrFail($id);
            $noticia->titulo = $request->titulo;
            $noticia->fecha = $request->fecha;
            $noticia->descripcion = $request->descripcion;
            $noticia->link = $request->link;

            // Si se sube una nueva imagen
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('prensa', 'public');
                $noticia->image = $imagePath; // <-- Usando 'image'
            }

            $noticia->save();

            return redirect()->route('noticias.editar', $id)->with('success', 'Noticia actualizada correctamente.');

        }

        // Eliminar la noticia
        public function destroy($id)
        {
            $noticia = Noticia::findOrFail($id);
            $noticia->delete();

            return redirect()->route('prensa')->with('success', 'Noticia eliminada correctamente.');
        }

        public function inicio()
        {
            // Obtener las últimas 3 noticias ordenadas por fecha de publicación
            $noticias = Noticia::latest()->take(3)->get(); // Cambiado de 4 a 3 noticias

            // Pasar las noticias a la vista
            return view('welcome', compact('noticias'));
        }
}
