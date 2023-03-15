<html>
    <head>
        <title>Proveedores</title>
    </head>
    <body>
        <h1>Proveedores</h1>
        <ul>
            @foreach ($proveedores as $proveedor)
                <li>{{ $proveedor->nombre }}</li>
            @endforeach
        </ul>
    </body>
