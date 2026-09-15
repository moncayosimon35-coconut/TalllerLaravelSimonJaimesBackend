<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Idioma;
use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function index(Request $request)
    {
        $idiomas = Idioma::all();
        $query = Juego::with(['idioma', 'expansiones']);

        // 1. Búsqueda por Nombre (Juego o Expansión)
        if ($request->filled('nombre')) {
            $nombre = $request->input('nombre');
            $query->where(function ($q) use ($nombre) {
                $q->where('titulo', 'LIKE', "%{$nombre}%")
                  ->orWhereHas('expansiones', function ($qExp) use ($nombre) {
                      $qExp->where('titulo', 'LIKE', "%{$nombre}%");
                  });
            });
        }

        // 2. Rango de años de creación
        if ($request->filled('anio_desde')) {
            $query->where('anio', '>=', $request->input('anio_desde'));
        }
        if ($request->filled('anio_hasta')) {
            $query->where('anio', '<=', $request->input('anio_hasta'));
        }

        // 3. Idioma del Juego
        if ($request->filled('idioma_id')) {
            $query->where('idioma_id', $request->input('idioma_id'));
        }

        $juegos = $query->get();

        return view('buscar', compact('juegos', 'idiomas'));
    }
}