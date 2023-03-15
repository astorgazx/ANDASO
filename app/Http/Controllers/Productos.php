<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos extends Controller
{
    // Index method to show all products
    public function index()
    {
        $productos = \App\Models\Productos::all();
        return view('productos.index', compact('productos'));
    }

    // Metodo para agregar un producto
    public function showRegistroProducto()
    {
        return view('productos.add');
    }

    public function add(Request $request)
    {
        $producto = new \App\Models\Productos();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('productos.index');
    }

    // Metodo para editar un producto
    public function showEditProducto($id)
    {
        $producto = \App\Models\Productos::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function edit(Request $request, $id)
    {
        $producto = \App\Models\Productos::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('productos.index');
    }





}
