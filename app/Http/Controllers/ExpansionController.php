<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Idioma;
use App\Models\Expansion;
use Illuminate\Http\Request;

class ExpansionController extends Controller
{
    public function index()
    {
        // Carga ansiosa (eager loading) de las relaciones definidas en el modelo
        $expansiones = Expansion::with(['juego', 'idioma'])->get();
        return view('expansiones.index', compact('expansiones'));
    }

    public function show(Expansion $expansion)
    {
        // Inyección de modelo directa de Eloquent
        $expansion->load(['juego', 'idioma']);
        return view('expansiones.show', compact('expansion'));
    }

    public function create()
    {
        $juegos = Juego::all();
        $idiomas = Idioma::all();
        return view('expansiones.create', compact('juegos', 'idiomas'));
    }

    public function store(Request $request)
    {
        Expansion::create($request->only(['juego_id', 'titulo', 'idioma_id']));
        return redirect()->route('expansiones.index')->with('success', '¡Expansión guardada con éxito!');
    }

    public function destroy(Expansion $expansion)
    {
        $expansion->delete();
        return redirect()->route('expansiones.index')->with('success', '¡Expansión eliminada correctamente!');
    }
}