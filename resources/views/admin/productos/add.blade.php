@extends('layouts.actual')

@section('content')

<!-- Formulario de alta de productos -->

<div class = "container" >
    <div class = "row justify-content-center" >
        <div class = "col-md-8" >
            <div class = "card" >
                <div class = "card-header" > {{ __('Alta de productos') }} </div>
                <div class = "card-body" >
                    <form method = "POST" action = "{{ route('productos.add') }}" >
                        @csrf
                        <div class = "row mb-3" >
                            <label for = "nombre" class = "col-md-4 col-form-label text-md-end" > {{ __('Nombre') }} </label>
                            <div class = "col-md-6" >
                                <input id = "nombre" type = "text" class = "form-control @error('nombre') is-invalid @enderror" name = "nombre" value = "{{ old('nombre') }}" required autocomplete = "nombre" autofocus >
                                @error('nombre')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "descripcion" class = "col-md-4 col-form-label text-md-end" > {{ __('Descripción') }} </label>
                            <div class = "col-md-6" >
                                <input id = "descripcion" type = "text" class = "form-control @error('descripcion') is-invalid @enderror" name = "descripcion" value = "{{ old('descripcion') }}" required autocomplete = "descripcion" autofocus >
                                @error('descripcion')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "precio" class = "col-md-4 col-form-label text-md-end" > {{ __('Precio') }} </label>
                            <div class = "col-md-6" >
                                <input id = "precio" type = "text" class = "form-control @error('precio') is-invalid @enderror" name = "precio" value = "{{ old('precio') }}" required autocomplete = "precio" autofocus >
                                @error('precio')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "stock" class = "col-md-4 col-form-label text-md-end" > {{ __('Stock') }} </label>
                            <div class = "col-md-6" >
                                <input id = "stock" type = "text" class = "form-control @error('stock') is-invalid @enderror" name = "stock" value = "{{ old('stock') }}" required autocomplete = "stock" autofocus >
                                @error('stock')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "categoria" class = "col-md-4 col-form-label text-md-end" > {{ __('Categoría') }} </label>
                            <div class = "col-md-6" >
                                <input id = "categoria" type = "text" class = "form-control @error('categoria') is-invalid @enderror" name = "categoria" value = "{{ old('categoria') }}" required autocomplete = "categoria" autofocus >
                                @error('categoria')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "imagen" class = "col-md-4 col-form-label text-md-end" > {{ __('Imagen') }} </label>
                            <div class = "col-md-6" >
                                <input id = "imagen" type = "text" class = "form-control @error('imagen') is-invalid @enderror" name = "imagen" value = "{{ old('imagen') }}" required autocomplete = "imagen" autofocus >
                                @error('imagen')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "created_at" class = "col-md-4 col-form-label text-md-end" > {{ __('Creado el') }} </label>
                            <div class = "col-md-6" >
                                <input id = "created_at" type = "text" class = "form-control @error('created_at') is-invalid @enderror" name = "created_at" value = "{{ old('created_at') }}" required autocomplete = "created_at" autofocus >
                                @error('created_at')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "updated_at" class = "col-md-4 col-form-label text-md-end" > {{ __('Actualizado el') }} </label>
                            <div class = "col-md-6" >
                                <input id = "updated_at" type = "text" class = "form-control @error('updated_at') is-invalid @enderror" name = "updated_at" value = "{{ old('updated_at') }}" required autocomplete = "updated_at" autofocus >
                                @error('updated_at')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class = "row mb-3" >
                            <label for = "deleted_at" class = "col-md-4 col-form-label text-md-end" > {{ __('Eliminado el') }} </label>
                            <div class = "col-md-6" >
                                <input id = "deleted_at" type = "text" class = "form-control @error('deleted_at') is-invalid @enderror" name = "deleted_at" value = "{{ old('deleted_at') }}" required autocomplete = "deleted_at" autofocus >
                                @error('deleted_at')
                                    <span class = "invalid-feedback" role = "alert" >
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class = "row mb-0" >
                            <div class = "col-md-6 offset-md-4" >
                                <button type = "submit" class = "btn btn-primary" >
                                    {{ __('Crear') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


