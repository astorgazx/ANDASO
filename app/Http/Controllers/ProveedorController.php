<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedores = \App\Models\Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function showRegistroProveedor()
    {
        return view('proveedores.add');
    }

    public function add(Request $request)
    {
        $proveedor = new \App\Models\Proveedor();
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();
        return redirect()->route('proveedores.index');
    }

    public function showEditProveedor($id)
    {
        $proveedor = \App\Models\Proveedor::find($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function edit(Request $request, $id)
    {
        $proveedor = \App\Models\Proveedor::find($id);
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();
        return redirect()->route('proveedores.index');
    }

    
}
