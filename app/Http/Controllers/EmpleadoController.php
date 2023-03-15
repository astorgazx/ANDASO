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

    //Mostrar formulario para agregar empleado
    public function showRegistroEmpleado()
    {
        return view('empleados.add');
    }
    //Agregar empleado
    public function add(Request $request)
    {
        $empleado = new \App\Models\Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
    //Mostrar formulario para editar empleado
    public function showEditEmpleado($id)
    {
        $empleado = \App\Models\Empleado::find($id);
        return view('empleados.edit', compact('empleado'));
    }
    //Editar empleado
    public function edit(Request $request, $id)
    {
        $empleado = \App\Models\Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
}
