@extends('layouts.actual')

@section('content')

<!-- Formulario de alta de productos -->

<div class = "container" >
    <form action = "{{route('productos.add')}}" method = "POST" >
        <div class="mb-3">
            <label ">Nombre del Producto</label>

            <input type="text" class="form-control"  placeholder="Ingrese el nombre" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label >Precio</label>
            <input type="number" class="form-control" placeholder="Precio">
        </div>

        <div class="mb-3">
            <label >Cantidad</label>
            <input class="form-control" type="number" placeholder="Cantidad" name="CanidadInput">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="DescripcionInput">
        </div>
        <div class="mb-3 form-check">
    </div>

        <button type="submit" class="btn btn-primary"   name="submit">Submit</button>
    </form>
</div>

@endsection

