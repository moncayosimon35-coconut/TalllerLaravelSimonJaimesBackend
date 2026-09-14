<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class BaseController extends Controller
{
    public function index()
    {
        return view('home', [
            'app_name' => 'Libreria Ulibro Unab'
        ]);
    }

    public function productos()
    {
        // En Laravel puedes llamar al método directamente de forma estática
        $productos = Producto::all(); 

        return view('home', [
            'app_name' => 'Libreria Unab',
            'productos' => $productos,
        ]);
    }
}