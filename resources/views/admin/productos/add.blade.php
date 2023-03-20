@extends('layouts.actual')

@section('content')

<!-- Formulario de alta de productos -->

<div class = "container" >
    <form action = "{{route('admin.productos.add')}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label ">Nombre del Producto</label>

            <input type="text" class="form-control"  placeholder="Ingrese el nombre" aria-describedby="emailHelp"  name="NombreInput">
        </div>

        <div class="mb-3">
            <label >Precio</label>
            <input type="number" class="form-control" placeholder="Precio" name="PrecioInput">
        </div>

        <div class="mb-3">
            <label >Cantidad</label>
            <input class="form-control" type="number" placeholder="Cantidad" name="CantidadInput" >
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="DescripcionInput">
        </div>

        <div class="mb-3">
            <label >Numero de Pieza Interna</label>
            <input type="text" class="form-control" name="NumeroPiezaInternaInput">
        </div>

        <div class="mb-3">
            <label >Numero de Pieza Externa</label>
            <input type="text" class="form-control" name="NumeroPiezaExternaInput">
        </div>

        <div class="mb-3">
            <label >Especificaciones</label>
            <input type="text" class="form-control" name="EspecificacionesInput">
        </div>

        <div class="mb-3">
            <label >Archivo de Imagen</label>
            <input type="file" class="form-control" name="ImagenInput">
        </div>
        
        
            <div class="mb-3 form-check">
    </div>

        <button type="submit" class="btn btn-primary"   name="submit">Submit</button>
    </form>
</div>

@endsection

