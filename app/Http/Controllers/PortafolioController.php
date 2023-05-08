<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{

    // public function index()
    // {
    //     $proyectos = Proyecto::paginate();

    //     return view('proyecto.index', compact('proyectos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    // }
}
