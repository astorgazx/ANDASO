<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //Mostar todos los empleados
    public function index()
    {
        $empleados = \App\Models\Empleado::all();
        return view('empleados.index', compact('empleados'));
    }
}
