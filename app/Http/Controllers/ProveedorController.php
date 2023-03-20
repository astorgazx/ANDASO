<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedores = \App\Models\Proveedor::all();
        return view('admin.proveedores.index', compact('proveedores'));
    }

    public function showRegistroProveedor()
    {
        return view('admin.proveedores.add-proveedores');
    }

    public function add(Request $request)
    {
        $proveedor = new \App\Models\Proveedor();
        $proveedor->nombreFiscalProveedor = $request->NombreFiscalInput;
        $proveedor->paisProveedor = $request->PaisInput;
        $proveedor->estadoProveedor = $request->EstadoInput;
        $proveedor->ciudadProveedor = $request->CiudadInput;
        $proveedor->calleProveedor = $request->CalleInput;
        $proveedor->noExteriorProveedor = $request->NoExteriorInput;
        $proveedor->noInteriorProveedor = $request->NoInteriorInput;
        $proveedor->codPostalProveedor = $request->CodigoPostalInput;
        $proveedor->rfcProveedor = $request->RFCInput;
        $proveedor->immexProveedor = $request->IMMEXInput;
        $proveedor->repaeProveedor = $request->REPAEInput;
        $proveedor->taxIDProveedor = $request->TaxIDInput;
        $proveedor->save();
        return redirect()->route('admin.proveedores');

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
        return redirect()->route('admin.proveedores');
    }

    public function delete($id)
    {
        $proveedor = \App\Models\Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('admin.proveedores');
    }

    
}
