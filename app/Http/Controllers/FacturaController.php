<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //Mostrar todas las facturas
    public function index()
    {
        $facturas = \App\Models\Factura::all();
        return view('facturas.index', compact('facturas'));
    }

    //Mostrar una factura
    public function show($id)
    {
        $factura = \App\Models\Factura::find($id);
        return view('facturas.show', compact('factura'));
    }

    //Crear una factura
    public function create()
    {
        $clientes = \App\Models\Cliente::all();
        $empleados = \App\Models\Empleado::all();
        $empresas = \App\Models\Empresa::all();
        return view('facturas.create', compact('clientes', 'empleados', 'empresas'));
    }

    //Guardar una factura
    public function store(Request $request)
    {
        $factura = new \App\Models\Factura();
        $factura->idCliente = $request->get('idCliente');
        $factura->idEmpleado = $request->get('idEmpleado');
        $factura->idEmpresa = $request->get('idEmpresa');
        $factura->fechaFactura = $request->get('fechaFactura');
        $factura->subtotalFactura = $request->get('subtotalFactura');
        $factura->ivaFactura = $request->get('ivaFactura');
        $factura->totalFactura = $request->get('totalFactura');
        $factura->save();
        return redirect('/facturas')->with('success', 'Factura guardada!');
    }

    //Editar una factura
    public function edit($id)
    {
        $factura = \App\Models\Factura::find($id);
        $clientes = \App\Models\Cliente::all();
        $empleados = \App\Models\Empleado::all();
        $empresas = \App\Models\Empresa::all();
        return view('facturas.edit', compact('factura', 'clientes', 'empleados', 'empresas'));
    }

    //Actualizar una factura
    public function update(Request $request, $id)
    {
        $factura = \App\Models\Factura::find($id);
        $factura->idCliente = $request->get('idCliente');
        $factura->idEmpleado = $request->get('idEmpleado');
}
}
