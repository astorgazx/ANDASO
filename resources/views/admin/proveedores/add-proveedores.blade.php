@extends("layouts.actual")

@section("content")

<!-- Formulario de alta de proveedores -->

<h1 class="text-center">Agregar Proveedor</h1>

<form action = "{{route('admin.proveedores.add')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nombre Fiscal del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el nombre" name="NombreFiscalInput">
    </div>

    <div class="mb-3">
        <label>Pais del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el pais" name="PaisInput">
    </div>

    <div class="mb-3">
        <label>Estado del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el estado" name="EstadoInput">
    </div>

    <div class="mb-3">
        <label>Ciudad del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese la ciudad" name="CiudadInput">
    </div>

    <div class="mb-3">
        <label>Calle del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese la calle" name="CalleInput">

    </div>

    <div class="mb-3">
        <label>Numero Exterior del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el numero de calle" name="NoExteriorInput">
    </div>

    <div class="mb-3">
        <label>Numero Interior del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el numero de calle" name="NoInteriorInput">
    </div>

    <div class="mb-3">
        <label>Codigo Postal del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el codigo postal" name="CodigoPostalInput">
    </div>

    <div class="mb-3">
        <label>RFC del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el RFC" name="RFCInput">
    </div>

    <div class="mb-3">
        <label>Immex del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el immex" name="IMMEXInput">
    </div>

    <div class="mb-3">
        <label>Repae del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el repae" name="REPAEInput">
    </div>

    <div class="mb-3">
        <label>Tax ID del Proveedor</label>
        <input type="text" class="form-control"  placeholder="Ingrese el tax id" name="TaxIDInput">
    </div>

    <div class="form-check">

    </div>

    <button type="submit" class="btn btn-primary"   name="submit">Submit</button>

</form>

@endsection
