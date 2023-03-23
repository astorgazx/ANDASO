
@extends('layouts.actual')

@section('content')

<!-- Crear una tabla para mostra la informacion de los clientes -->


<div class="row">
    <div class="col-md-auto">
        <h3 class="text-center">Clientes</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombreCliente }}</td>
                    <td>{{ $cliente->apPaternoCliente }}</td>
                    <td>{{ $cliente->emailCliente }}</td>
                    <td>{{ $cliente->telefonoCliente }}</td>
                    <td>
                        <a href="{{ route('admin.clientes.show', $cliente->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.clientes.destroy', $cliente->id) }}" method="POST">
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
