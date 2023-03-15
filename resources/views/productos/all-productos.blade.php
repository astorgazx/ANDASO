@extends('layouts.actual')

@section('content')

<!-- Mostrar todos los productos usando cards de Bootstrap y un boton de compra que redirige a la vista individal del producto   -->

@foreach ( $productos as $producto )
    <div class = "row" >
        <div class = "col-md-4" >
            <img src = "{{ $producto->imagen }}" alt = "" class = "img-fluid" >
        </div>
        <div class = "col-md-8" >
            <h2> {{ $producto->nombre }} </h2>
            <p> {{ $producto->descripcion }} </p>
            <p> {{ $producto->precio }} </p>
            <p> {{ $producto->stock }} </p>
            <p> {{ $producto->categoria }} </p>
            <p> {{ $producto->created_at }} </p>
            <p> {{ $producto->updated_at }} </p>
            <a href = "" class = "btn btn-primary" > Comprar </a>
        </div>
    </div>
@endforeach

@endsection
