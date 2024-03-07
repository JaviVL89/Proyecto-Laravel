<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // Método para mostrar todos los eventos
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    // Método para mostrar el formulario de creación de eventos
    public function create()
    {
        return view('eventos.create');
    }

    // Método para almacenar un nuevo evento
    public function store(Request $request)
    {
        // Validar los datos recibidos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
        ]);

        // Crear un nuevo evento con los datos validados
        $evento = Evento::create($validatedData);
        
        // Redireccionar a la página de índice de eventos con un mensaje de éxito
        return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente.');
    }

    // Método para mostrar un evento específico
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    // Método para mostrar el formulario de edición de un evento
    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    // Método para actualizar un evento existente
    public function update(Request $request, Evento $evento)
    {
        // Validar los datos recibidos del formulario de edición
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
        ]);

        // Actualizar el evento con los datos validados
        $evento->update($validatedData);
        
        // Redireccionar a la página de índice de eventos
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente.');
    }

    // Método para eliminar un evento
    public function destroy($id)
    {
        // Encontrar el evento por su ID y eliminarlo
        $evento = Evento::findOrFail($id);
        $evento->delete();
    
        // Redireccionar a la página de índice de eventos
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente.');
    }

    // Método para mostrar los comentarios asociados a un evento específico
    public function showComentarios($eventoId)
    {
        // Cargar el evento con sus comentarios relacionados y mostrar la vista correspondiente
        $evento = Evento::with('comentarios')->findOrFail($eventoId);
        return view('eventos.comentarios', compact('evento'));
    }
    
}
