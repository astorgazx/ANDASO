@extends('layouts.actual')

@section('content')

<!-- Formulario de alta de productos -->


<form action="{{route('admin.productos.add')}}" method="POST" enctype="multipart/form-data" class="text-center mx-auto">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control w-50 mx-auto" placeholder="Ingrese el nombre" name="NombreInput">
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control w-50 mx-auto" placeholder="Ingrese el precio" name="PrecioInput">
    </div>
    <div class="mb-3">
        <label class="form-label">Cantidad</label>
        <input class="form-control w-50 mx-auto" type="number" placeholder="Ingrese la cantidad" name="CantidadInput">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input type="text" class="form-control w-50 mx-auto" name="DescripcionInput" placeholder="Ingrese la descripción">
    </div>
    <div class="mb-3">
        <label class="form-label">Número de pieza interna</label>
        <input type="text" class="form-control w-50 mx-auto" name="NumeroPiezaInternaInput" placeholder="Ingrese el número de pieza interna">
    </div>
    <div class="mb-3">
        <label class="form-label">Número de pieza externa</label>
        <input type="text" class="form-control w-50 mx-auto" name="NumeroPiezaExternaInput" placeholder="Ingrese el número de pieza externa">
    </div>
    <div class="mb-3">
        <label class="form-label">Especificaciones</label>
        <input type="text" class="form-control w-50 mx-auto" name="EspecificacionesInput" placeholder="Ingrese las especificaciones">
    </div>
    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" class="form-control w-50 mx-auto" name="ImagenInput" placeholder="Seleccione una imagen">
    </div>
    <div class="mb-3 form-check"></div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


@endsection

