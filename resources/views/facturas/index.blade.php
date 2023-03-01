<html>
    <head>
        <title>Facturas</title>
    </head>
    <body>
        <h1>Facturas</h1>
        <ul>
            @foreach ($facturas as $factura)
                <li>{{ $factura->id }} - {{ $factura->fecha }}</li>
            @endforeach
        </ul>
    </body>
</html>
