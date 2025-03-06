<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arco;
use Illuminate\Support\Facades\Storage; // Importa Storage para manejar archivos

class ArcoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arcos = Arco::all(); // Obtiene todos los arcos de la base de datos
        return view('arcos.index', compact('arcos')); // Pasa los arcos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('arcos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen principal
            'curiosidad' => 'nullable|string', // Validar la curiosidad
            'imagen_curiosidad' => 'nullable|url', // Validar la imagen de curiosidad
        ]);

        // Guardar la imagen principal si existe
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('arcos', 'public'); // Guarda la imagen en storage/app/public/arcos
        }

        // Guardar la imagen de curiosidad si existe
        $imagenCuriosidadPath = null;
        if ($request->hasFile('imagen_curiosidad')) {
            $imagenCuriosidadPath = $request->file('imagen_curiosidad')->store('curiosidades', 'public'); // Guarda la imagen en storage/app/public/curiosidades
        }

        // Crear un nuevo arco en la base de datos
        Arco::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'imagen' => $imagenPath,
            'curiosidad' => $request->curiosidad,
            'imagen_curiosidad' => $request->imagen_curiosidad, 
        ]);

        // Volver a la vista con mensaje
        return redirect()->route('arcos.index')->with('success', 'Arco creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID
        return view('arcos.show', compact('arco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID
        return view('arcos.edit', compact('arco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen principal
            'curiosidad' => 'nullable|string', // Validar la curiosidad
            'imagen_curiosidad' => 'nullable|url',
        ]);

        // Buscar el arco por su ID
        $arco = Arco::findOrFail($id);

        // Actualizar la imagen principal si existe una nueva
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior en caso de existir
            if ($arco->imagen) {
                Storage::disk('public')->delete($arco->imagen);
            }
            // Guardar la nueva imagen
            $imagenPath = $request->file('imagen')->store('arcos', 'public');
            $arco->imagen = $imagenPath;
        }

        // Actualizar la imagen de curiosidad si existe una nueva
        if ($request->hasFile('imagen_curiosidad')) {
            // Eliminar la imagen de curiosidad anterior en caso de existir
            if ($arco->imagen_curiosidad) {
                Storage::disk('public')->delete($arco->imagen_curiosidad);
            }
            // Guardar la nueva imagen de curiosidad
            $imagenCuriosidadPath = $request->file('imagen_curiosidad')->store('curiosidades', 'public');
            $arco->imagen_curiosidad = $imagenCuriosidadPath;
        }

        // Actualizar los demás campos
        $arco->nombre = $request->nombre;
        $arco->descripcion = $request->descripcion;
        $arco->tipo = $request->tipo;
        $arco->imagen_curiosidad = $request->imagen_curiosidad; 
        $arco->save();

        // Redirigir a la lista de arcos con un mensaje de éxito
        return redirect()->route('arcos.index')->with('success', 'Arco actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID

        // Eliminar la imagen principal si existe
        if ($arco->imagen) {
            Storage::disk('public')->delete($arco->imagen);
        }

        // Eliminar la imagen de curiosidad si existe
        if ($arco->imagen_curiosidad) {
            Storage::disk('public')->delete($arco->imagen_curiosidad);
        }

        // Eliminar el arco de la base de datos
        $arco->delete();

        // Volver a la lista con mensaje
        return redirect()->route('arcos.index')->with('success', 'Arco eliminado correctamente.');
    }
}