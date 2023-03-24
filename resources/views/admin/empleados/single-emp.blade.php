@extends("layouts.actual")

@section("content")


<!-- Cargar la informacion del empleado individual -->
<h2 class="text-center">Informacion del empleado</h2>
<h3 class="text-center">Nombre: {{ $empleado->nombreEmpleado }}</h3>
<h3 class="text-center">Apellido: {{ $empleado->apPaternoEmpleado }}</h3>
<h3 class="text-center">Correo: {{ $empleado->emailEmpleado }}</h3>
<h3 class="text-center">Telefono: {{ $empleado->telefonoEmpleado }}</h3>
<h3 class="text-center">Puesto: {{ $empleado->puestoEmpleado }}</h3>
<h3 class="text-center">Salario: {{ $empleado->salarioEmpleado }}</h3>
<h3 class="text-center">Fecha de nacimiento: {{ $empleado->fechaNacimientoEmpleado }}</h3>
<h3 class="text-center">Fecha de contratacion: {{ $empleado->fechaContratacionEmpleado }}</h3>
<h3 class="text-center">Fecha de terminacion: {{ $empleado->fechaTerminacionEmpleado }}</h3>
<h3 class="text-center">Estado: {{ $empleado->estadoEmpleado }}</h3>




@endsection
