@extends('layouts.actual')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-success">Crear</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
