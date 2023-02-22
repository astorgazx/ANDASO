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
}
