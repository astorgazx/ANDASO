<html>
    <head>
        <title>Clientes</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <ul>
            @foreach ($clientes as $cliente)
                <li>{{ $cliente->nome }}</li>
            @endforeach
        </ul>
    </body>


</html>
