@extends("layouts.actual")

@section("content")

<!-- Cargar la vista individual del producto -->

<div class="row">
    <div class="col-md-auto">
        <h3 class="text-center">{{ $producto->nombreProducto }}</h3>
        <img class="img-fluid" src="{{ $producto->dibujoProducto }}" alt="Card image cap">
        <p class="fs-4 text-start">{{ $producto->descripcion }}</p>
        <p class="fs-4 text-start">{{ $producto->precioProducto }}</p>
        <a href="{{ route('admin.productos.show', $producto->id) }}" class="btn btn-primary">Comprar</a>
    </div>
</div>

<!-- Modal para realizar la compra -->

<div class="modal" id="compraModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Compra</h5>
                <!-- Metodos de pago -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
        </div>
    </div>
</div>

<!-- Hacer el script para el modal -->

<script>
    $(document).ready(function() {
        $('#compraModal').modal('show');
    });
</script>



@endsection


