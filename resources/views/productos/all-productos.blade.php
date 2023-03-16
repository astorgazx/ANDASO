@extends('layouts.actual')

@section('content')

<!-- Mostrar todos los productos usando cards de Bootstrap y un boton de compra que redirige a la vista individal del producto   -->

<div class="card-group">
    @foreach ( $productos as $producto )
        <div class="card">
            <img class="card-img-top" src="{{ $producto->imagen }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->nombre }}</h5>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text">{{ $producto->precio }}</p>
                <a href="{{ route('producto', $producto->id) }}" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    @endforeach
</div>


@endsection
