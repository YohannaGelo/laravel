<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class CommentController extends Controller
{

    public function store(Request $request, Gallery $gallery)
    {
        // Validar contenido del comentario
        $request->validate([
            'contenido' => 'required|string',
        ]);

        // Asegurarse de que el usuario esté autenticado
        if (!Auth::check()) {
            return back()->with('error', 'Debes estar autenticado para comentar.');
        }

        // Obtener el usuario autenticado de manera explícita
        /** @var User $user */
        $user = Auth::user();

        // Asegurar que user no sea null
        $userId = $user ? $user->id : null;

        // Crear el comentario
        $gallery->comments()->create([
            'contenido' => $request->contenido,
            'user_id' => $userId, // Usar el ID del usuario autenticado
        ]);

        // Redirigir de vuelta con mensaje de éxito
        return back()->with('success', 'Comentario agregado correctamente.');
    }
}
