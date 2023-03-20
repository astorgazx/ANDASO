<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos extends Controller
{
    // Index method to show all products
    public function index()
    {
        $productos = \App\Models\Productos::all();
        return view('productos.all-productos', compact('productos'));
    }

    // Metodo para agregar un producto
    public function showRegistroProducto()
    {
        return view("admin.productos.add");
    }

    public function add(Request $request)
    {
        $producto = new \App\Models\Productos();
        $producto->nombreProducto = $request->NombreInput;
        $producto->descripcionProducto = $request->DescripcionInput;
        $producto->precioProducto = $request->PrecioInput;
        $producto->noPiezaInterna = $request->NumeroPiezaInternaInput;
        $producto->cantidadProducto = $request->CantidadInput;
        $producto->especificacionProducto = $request->EspecificacionesInput;
        // Guardar la imagen
        $producto->dibujoProducto = $request->file('ImagenInput')->store('public');
        $archivo = $request->file('ImagenInput');

        $ruta = $archivo->store('public');



        $producto->save();
        return redirect()->route('admin.productos');
    }

    // Metodo para editar un producto
    public function showEditProducto($id)
    {
        $producto = \App\Models\Productos::find($id);
        return view('productos.edit', compact('producto'));
    }
    //Metodo para ver un producto
    public function showProducto($id)
    {
        $producto = \App\Models\Productos::find($id);
        return view('productos.individual-producto', compact('producto'));
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
