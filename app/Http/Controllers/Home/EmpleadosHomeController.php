<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadosHomeController extends Controller
{
    //
    public function __construct() // Esta función es la que se encarga de decirle a Laravel que middleware debe usar
    {

        $this->middleware('auth:empleados');
    }

    public function index()
    {
        return view('home.empleados'); // Esta función es la que se encarga de mostrar la vista del home
    }
}
