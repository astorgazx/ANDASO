<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Mostar todos los clientes
    public function index()
    {
        $clientes = \App\Models\Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
}
