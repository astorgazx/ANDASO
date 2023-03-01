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
}
