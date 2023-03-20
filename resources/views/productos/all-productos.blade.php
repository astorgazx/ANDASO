@extends('layouts.actual')

@section('content')

<!-- Mostrar todos los productos usando cards de Bootstrap y un boton de compra que redirige a la vista individal del producto   -->

<div class="card-group">
    @foreach ( $productos as $producto )
        <div class="card">
            <img class="card-img-top" src="{{ $producto->dibujoProducto }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->nombreProducto }}</h5>
                <p class="card-text">{{ $producto->descripcionProducto }}</p>
                <p class="card-text">{{ $producto->precioProducto }}</p>
                <a href="{{ route('admin.productos.show', $producto->id) }}" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    @endforeach
</div>


@endsection
