<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadosLoginController extends LoginController
{
    //
    protected $redirectTo = '/home/empleados';

    public function __construct() // Esta función es la que se encarga de decirle a Laravel que middleware debe usar
    {
        $this->middleware('guest:empleados')->except('logout');
    }

    public function showLoginForm() // Esta función es la que se encarga de mostrar la vista del formulario de login
    {
        return view('auth.login.empleados');
    }

    public function username() // Esta función es la que se encarga de decirle a Laravel que campo debe usar para autenticar
    {
        return 'idEmpleado';
    }

    protected function guard() // Esta función es la que se encarga de decirle a Laravel que guard debe usar
    {
        return auth()->guard('empleados');
    }

}
