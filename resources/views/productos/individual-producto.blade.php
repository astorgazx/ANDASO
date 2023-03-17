@extends("layouts.actual")

@section("content")

<!-- Cargar la vista individual del producto -->

<div class="row">
    <div class="col-md-auto">
        <h3 class="text-center">{{ $producto->nombre }}</h3>
        <img class="img-fluid" src="{{ $producto->imagen }}" alt="Card image cap">
        <p class="fs-4 text-start">{{ $producto->descripcion }}</p>
        <p class="fs-4 text-start">{{ $producto->precio }}</p>
        <a href="{{ route('producto', $producto->id) }}" class="btn btn-primary">Comprar</a>
    </div>
</div>

@endsection


