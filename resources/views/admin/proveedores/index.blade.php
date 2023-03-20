@extends("layouts.actual")

@section("content")

<!-- Crear una tabla para mostrar los proveedores -->

<div class="row">
    <div class="col-md-auto">
        <h1 class="text-center">Proveedores</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Calle</th>
                    <th scope="col">No. Exterior</th>
                    <th scope="col">No. Interior</th>
                    <th scope="col">Codigo Postal</th>
                    <th scope="col">RFC</th>
                    <th scope="col">IMMEX</th>
                    <th scope="col">REPAE</th>
                    <th scope="col">TAX ID</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->nombreFiscalProveedor }}</td>
                    <td>{{ $proveedor->paisProveedor }}</td>
                    <td>{{ $proveedor->estadoProveedor }}</td>
                    <td>{{ $proveedor->ciudadProveedor }}</td>
                    <td>{{ $proveedor->calleProveedor }}</td>
                    <td>{{ $proveedor->noExteriorProveedor }}</td>
                    <td>{{ $proveedor->noInteriorProveedor }}</td>
                    <td>{{ $proveedor->codPostalProveedor }}</td>
                    <td>{{ $proveedor->rfcProveedor }}</td>
                    <td>{{ $proveedor->immexProveedor }}</td>
                    <td>{{ $proveedor->repaeProveedor }}</td>
                    <td>{{ $proveedor->taxIdProveedor }}</td>
                    <td>
                        <a href="{{ route('admin.proveedores.edit', $proveedor->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('admin.proveedores.delete', $proveedor->id) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
