<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    // Index method to show all companies
    public function index()
    {
        $empresas = \App\Models\Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    // Metodo para agregar una empresa
    public function showRegistroEmpresa()
    {
        return view('empresas.add');
    }

    public function add(Request $request)
    {
        $empresa = new \App\Models\Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->save();
        return redirect()->route('empresas.index');
    }

    // Metodo para editar una empresa
    public function showEditEmpresa($id)
    {
        $empresa = \App\Models\Empresa::find($id);
        return view('empresas.edit', compact('empresa'));
    }

    public function edit(Request $request, $id)
    {
        $empresa = \App\Models\Empresa::find($id);
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->save();
        return redirect()->route('empresas.index');
    }
}
